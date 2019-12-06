<?php
// bin helper file to get connection details from the command line

require __DIR__ . '/../vendor/autoload.php';

/**
 * Display help text for the command
 *
 * @param string $description Description of what the command does
 */
function help($description){
	$command = 	$_SERVER['SCRIPT_FILENAME'];
	echo <<<HELP
$description

Usage:	$command [-u <username>] [-p <password>] <connection_string>

Options:
	<connection_string>	The resource to connect to, in the form of either:
		mysql:host=<host>;db=<database>	A php Data Source Name
		sqlite3:<filepath>		An SQLite3 database file

	-u <username>	The username to use if connecting using a PDO/DSN connection
	-p <password>	The password to use if connecting using a PDO/DSN connection
	-h		This help

Alternatively; connection string, username, and password can be specified
using the environment variables DATABASE_CONNECTION, DATABASE_USER and
DATABASE_PASSWORD, respectively.

HELP;
}

/**
 * Get the database connection from the command line arguments,
 * or print the help text
 *
 * @param string $desc	Brief description of what the called command does
 * @return \ScratchpadsStats\Storage
 */
function getConnection($desc){
	$opind = null;
	$opts = getopt('hu:p:', [], $opind);

	if(isset($opts['h'])) {
		help($desc);
		die;
	}

	$db = new \ScratchpadsStats\Storage(
		$argv[$opind] ?? getenv('DATABASE_CONNECTION'),
		$opts['u'] ?? getenv('DATABASE_USER'),
		$opts['p'] ?? getenv('DATABASE_PASSWORD')
	);

	return $db;
}