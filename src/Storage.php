<?php namespace ScratchpadsStats;

/**
 * Abstraction around data storage for recording sites and stats
 */
class Storage {
	function __construct($dsn, $username = null, $password = null){
		list($proto, $file) = explode(':', $dsn, 2);
		if($proto == "sqlite" || $proto == "sqlite3") {
			$this->db = new \SQLite3($file);
		} else {
			$this->db = new \PDO($dsn, $username, $password);
			$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		}
	}
	/**
	 * Perform any database migrations needed
	 *
	 * @return void
	 */
	function migrate() {
		$idRow = $this->db instanceof \PDO ?
			"id INT NOT NULL AUTO_INCREMENT," : "";
		$pKey = $idRow ? ", PRIMARY KEY (id)" : "";

		$this->db->exec("CREATE TABLE IF NOT EXISTS site (
			url VARCHAR(255) NOT NULL,
			name VARCHAR(255) NOT NULL,
			api_version INT NOT NULL,
			date_created TIMESTAMP NOT NULL,
			last_attempt TIMESTAMP,
			last_success TIMESTAMP,
			PRIMARY KEY (url)
		);");

		$this->db->exec("CREATE TABLE IF NOT EXISTS capture (
			$idRow
			date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			since TIMESTAMP NOT NULL,
			site VARCHAR(255) NOT NULL,
			stats BLOB NOT NULL
			$pKey
		);");
	}

	/**
	 * Register a scratchpad for stat collection
	 *
	 * @param string $url The hostname of the scratchpad
	 * @param string $name The title of the scratchpad
	 * @param integer $date The date the scratchpad was created
	 * @param integer $api 0=old api, 1=current api
	 * @return void
	 */
	function register($url, $name, $date, $api=1){
		$onDupe = $this->db instanceof \PDO ?
		"ON DUPLICATE KEY UPDATE name = :name, api_version = :api" : "";

		$statement = $this->db->prepare(
			"insert into site (url, name, date_created, api_version) ".
			"VALUES(:url, :name, :date, :api) ".
			$onDupe
		);
		$statement->bindValue(":url", $url);
		$statement->bindValue(":name", $name);
		$statement->bindValue(":date", date(DATE_ISO8601, $date));
		$statement->bindValue(":api", $api);
		$statement->execute();
	}

	/**
	 * Get the next site waiting for stats collection
	 *
	 * @return array Associative array with url and api_version
	 */
	function getNextSite() {
		$q = $this->db->query("select url, api_version from site order by last_attempt limit 1");
		return ($q instanceof \SQLite3Result) ? $q->fetchArray(SQLITE3_ASSOC) : $q->fetch(\PDO::FETCH_ASSOC);
	}

	/**
	 * Record an attempt to collect stats from a site
	 *
	 * @param string $site The site hostname
	 * @param boolean $success True if the collection was successful
	 * @return void
	 */
	function registerAttempt($site, $success = false) {
		if($success) {
			$stmt = $this->db->prepare("update site set last_attempt=date('now'), last_success=date('now') where url=:site");
		} else {
			$stmt = $this->db->prepare("update site set last_attempt=date('now') where url=:site");
		}

		$stmt->bindValue(':site', $site);
		$stmt->execute();
	}

	/**
	 * Record the stats collected from a site
	 *
	 * @param string $site The hostname of the site
	 * @param array $stats The stats collected from the site
	 * @return void
	 */
	function recordStats($site, $stats) {
		$stmt = $this->db->prepare("Insert into capture (date, since, site, stats) VALUES(:date, :since, :site, :stats)");
		// Todo: Ensure the stats are in a certain format; calculate totals, etc
		$stmt->bindValue(':since', date(DATE_ISO8601, $stats['since']));
		$stmt->bindValue(':date', date(DATE_ISO8601));
		$stmt->bindValue(':stats', json_encode($stats));
		$stmt->bindValue(':site', $site);
		$stmt->execute();
	}

	/**
	 * Get all of the stats collected
	 *
	 * @return array Array of stats collected from all sites
	 */
	function getStats(){
		$query = $this->db->query('select date, since, site, stats from capture order by date');
		if($query instanceof \SQLite3Result) {
			$results = [];
			while($result = $query->fetchArray(SQLITE3_ASSOC)) {
				$result['stats'] = json_decode($result['stats'], 1);
				$results[] = $result;
			}

			return $results;
		} else {
			$results = $query->fetchAll(\PDO::FETCH_ASSOC);
			foreach($results as &$result) {
				$result['stats'] = json_decode($result['stats'], 1);
			}
			return $results;
		}
	}
}
