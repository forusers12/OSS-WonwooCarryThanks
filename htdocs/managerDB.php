<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분


include ("db.php");
$connect=connect_db($host, $dbid, $dbpw, $dbname);
if(!$connect){
   echo '[연결실패] : '.$connect->connect_error.'';
} else {
   //echo '[연결성공]';
}
$uploads_dir = 'uploads/';

$source = $_FILES['exPic']['tmp_name'];
$dest = basename($_FILES['exPic']['name']);
move_uploaded_file($source, "$uploads_dir/$dest");

$source_m = $_FILES['printPic']['tmp_name'];
$dest_m = basename($_FILES['printPic']['name']);
move_uploaded_file($source_m, "$uploads_dir/$dest_m");


$data_stream = "'".$_POST['funcName']."','".$_POST['head']."','".$_POST['beginExplain']."','".$_POST['parameter']."','".$_POST['returnValue']."','".$_POST['returnValue2']."','".$uploads_dir."','".$dest."','".$dest_m."'";
$fName = $_POST['funcName'];
$hName = $_POST['head'];
$beName = $_POST['beginExplain'];
$paraName = $_POST['parameter'];
$rv1Name = $_POST['returnValue'];
$rv2Name = $_POST['returnValue2'];


$query = "INSERT INTO `function`(`funcName`, `head`, `beginExplain`, `parameter`, `returnValue`, `returnValue2`, `route`, `exPic`, `printPic`) VALUES (".$data_stream.") ON DUPLICATE KEY UPDATE funcName='$fName', head='$hName', beginExplain='$beName', parameter='$paraName', returnValue='$rv1Name', returnValue2='$rv2Name', route='$uploads_dir', exPic='$dest', printPic='$dest_m'";
  $result = mysqli_query($connect, $query);



if($result)
{
  //echo '성공';
}
else {
  //echo '실패';
}

mysqli_close($connect);




echo("<meta http-equiv='Refresh' content='0; URL=managerFunc.php?head=stdio.h'>");
echo "<script> alert('입력이 완료되었습니다.');</script>";

?>
