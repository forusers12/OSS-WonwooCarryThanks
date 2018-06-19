
<?php
session_start();
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

 $query = mysqli_query($conn, "SELECT * FROM member WHERE password=password('$password') AND id='$id'"); //db에서 맞는거 찾기
 $admin = mysqli_query($conn, "SELECT * FROM member where id='$id' AND admin='1' ");
 $adminCheck = mysqli_num_rows($admin);
 $rows = mysqli_num_rows($query); // 찾아서 몇 줄인지 세보기
 if($rows == 1){ // 1줄이면
   $_SESSION['id'] = $id; //세션 변수를 만들기
   if(isset($_SESSION['id'])){ // 세션변수가 참이면
     if($adminCheck==1){
<<<<<<< HEAD
       header("Location: ../managerFunc.php?head=stdio.h");
=======
       header("Location: ../tables.php?head=stdio.h");
>>>>>>> fc230185ae5a296f872109dcc7aa81bca51b41d8
     }
     else{
       header("Location: ../index.php"); //로그인 성공 페이지로 이동
     }

   }
   else{
     echo "세션 저장실패";
   }
 }
 else
 {
     echo "<script> alert('아이디와 비밀번호를 정확히 입력해주세요..');</script>";
     echo "<script>window.history.back();</script>";

 }

 $conn->close();
 }

}

?>
