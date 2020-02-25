PORT=${1:-3030}
HOST=${2:-localhost}
export DATABASE_CONNECTION='sqlite:db.db'
./bin/migrate
php -S $HOST:$PORT src/index.php
