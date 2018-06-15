
<?php

$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['id']) || empty($_POST['password'])){
 $error = "아이디와 패스워드를 입력해주세요";
 }
 else
 {

 $id=$_POST['id'];
 $password=$_POST['password'];
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

 $query = mysqli_query($conn, "SELECT * FROM member WHERE password='$password' AND id='$id'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
   $_SESSION['is_login']=true;
   $_SESSION['id'] = $_POST['id'];

 header("Location: ./index_session.html");
 }
 else
 {
 $error = "아이디 또는 패스워드가 일치하지않습니다.";
 }

 $conn->close(); // Closing connection
 }

}

?>
