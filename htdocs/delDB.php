<?php
//데이터 베이스 연결하기
include ("db.php");
header('Content-Type: text/html; charset=utf-8');
$connect=connect_db($host, $dbid, $dbpw, $dbname);
if(!$connect){
   //echo '[연결실패] : '.$connect->connect_error.'';
} else {
   //echo '[연결성공]';
}
$bno = $_GET['funcName'];

$sql = "DELETE FROM `function` WHERE funcName='$bno'";

$result = mysqli_query($connect, $sql);



if($result)
{
//echo '성공';
}
else {
  //echo '실패';
}

mysqli_close($connect);



?>
<center>
<meta http-equiv='Refresh' content='0;  URL=managerFunc.php?head=stdio.h'>
<script> alert('삭제가 완료되었습니다.');</script>
