<?php
//database connect

define ('DB_USER', 'username');
define ('DB_PASSWORD', 'password');
define ('DB_HOST', 'host');
define ('DB_NAME', 'database');

$dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die('Could not connect to MySQL: ' . mysql_error());
mysql_select_db (DB_NAME) OR die('Could not select the database: ' . mysql_error());
?>
