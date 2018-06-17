<?php
session_start();
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

function mq($sql){
  global $db;
  return $db->query($sql);
}?>
