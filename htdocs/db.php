<?php
session_start();
<<<<<<< HEAD
$db = new mysqli("localhost", "root", "111111", "academy");
$db->set_charset("utf8");

$host="localhost";
$dbid="root";
$dbpw="111111";
$dbname="academy";

function connect_db($host, $dbid, $dbpw, $dbname)
{
  return mysqli_connect($host, $dbid, $dbpw, $dbname);
}
=======
	$db = new mysqli("localhost","root","111111","oss");
	$db->set_charset("utf8");
>>>>>>> 59735164d8a97aed5f434c8621a3071fcc191107

function mq($sql){
  global $db;
  return $db->query($sql);
}?>
