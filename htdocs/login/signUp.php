<?php

if(isset($_POST['register-submit'])){
  //if()
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '111111';
$mysql_database = 'academy';
$mysql_port = '3307';
$mysql_charset = 'utf8';
$conn = new mysqli($mysql_hostname, $mysql_username,
$mysql_password, $mysql_database, $mysql_port);

if($conn->connect_errno){
  echo '[연결실패] : '.$conn->connect_error.'';
  echo ''.$conn->connect_errno.'';
} else {
  echo '[연결성공]';
}

 $id=$_POST['id'];
 $password=md5($_POST['password']);
 $password2=$_POST['pwd2'];
 $email=$_POST['email'];

 $sql = "INSERT INTO member (id,password,email,admin) VALUES('$id','$password','$email','0')";

 if($conn->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
}
?>
