<?php
	header('Content-Type:text/html; charset=utf-8');
	error_reporting(E_ALL & ~E_NOTICE);

        define('DB_TYPE', 'sqlite');
        define('DB_DSN', 'sqlite:db_home/db_name');
        define('DB_CHARSET', 'utf8');
        define('DB_FIELDS_CACHE', 'false');
	
	define('DB_HOME', 'db_home');
	define('DB_NAME', 'db_name');
	define('DB_PREFIX', 'db_prefix');

        $dbpath = DB_HOME . "/" . DB_NAME;

        $db = new SQLite3($dbpath);
        if ( ! $db ) die('打开数据库失败：'.$db->lastErrorMsg());
	
?>
