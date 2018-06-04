
<?php

$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "아이디와 패스워드를 입력해주세요";
 }
 else
 {

 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $mysql_hostname = 'localhost';
 $mysql_username = 'root';
 $mysql_password = '111111';
 $mysql_database = 'test';
 $mysql_port = '3307';
 $mysql_charset = 'utf8';
 $conn = new mysqli($mysql_hostname, $mysql_username,
 $mysql_password, $mysql_database, $mysql_port);

 if($connect->connect_errno){
   echo '[연결실패] : '.$connect->connect_error.'';
} else {
   //echo '[연결성공]';
}

 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){

 header("Location: welcome.php");
 }
 else
 {
 $error = "아이디 또는 패스워드가 일치하지않습니다.";
 }

 $conn->close(); // Closing connection
 }

}

?>
