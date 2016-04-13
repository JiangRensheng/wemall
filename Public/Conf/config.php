<?php
	header('Content-Type:text/html; charset=utf-8');
	error_reporting(E_ALL & ~E_NOTICE);
	
	define('DB_HOME', '/tmp');
	define('DB_NAME', 'wemall');
	define('DB_PREFIX', 'wemall_');

        $dbpath = DB_HOME . "/" . DB_NAME;

        $db = new SQLite3($dbpath);
        if ( ! $db ) die('打开数据库失败：'.$db->lastErrorMsg());
	
?>
