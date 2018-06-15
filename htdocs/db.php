<?php

session_start();
	$db = new mysqli("localhost","root","12309753","db1");
	$db->set_charset("utf8");

	$host="localhost";
	$dbid="root";  // "
	$dbpw="12309753";
	$dbname="db1";
	function connect_db($host, $dbid, $dbpw, $dbname)
	{
	    return mysqli_connect($host, $dbid, $dbpw, $dbname);
	}
		function mq($sql){
		global $db;
		return $db->query($sql);
	}
?>
