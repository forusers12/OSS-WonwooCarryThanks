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
  //echo '[연결성공]';
}

 $id=$_POST['id'];
 $password=$_POST['password'];
 $password2=$_POST['pwd2'];
 $email=$_POST['email'];


 $check = "SELECT * FROM member WHERE id = '{$id}'";
 $resource = $conn->query($check) or die($this->_connect->error);
 if($resource->num_rows>=1){
   echo "<script> alert('이미 존재하는 아이디입니다.');</script>";
   echo "<script>window.history.back();</script>";
   exit(0);
 }
 $sql = "INSERT INTO member (id,password,email,admin) VALUES('$id',password('$password'),'$email','0')";

 if($conn->query($sql)){
   echo "<script> alert('회원가입이 완료되었습니다..');</script>";
   echo "<script>window.history.back();</script>";

 }else{
  echo 'fail to insert sql';
 }
}
?>
