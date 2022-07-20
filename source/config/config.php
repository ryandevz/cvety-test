<?php
define('APP_NAME', $_ENV['APP_NAME']);

define('APP_ROOT', dirname(dirname(__FILE__)));

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_HOST_PORT', $_ENV['DB_HOST'] . ':' . $_ENV['DB_PORT']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);