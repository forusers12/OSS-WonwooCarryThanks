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

$source = $_FILES['beginPic2']['tmp_name'];
$dest = basename($_FILES['beginPic2']['name']);
move_uploaded_file($source, "$uploads_dir/$dest");

$source_m = $_FILES['mediumPic1']['tmp_name'];
$dest_m = basename($_FILES['mediumPic1']['name']);
move_uploaded_file($source_m, "$uploads_dir/$dest_m");

$source_h = $_FILES['highPic1']['tmp_name'];
$dest_h = basename($_FILES['highPic1']['name']);
move_uploaded_file($source_h, "$uploads_dir/$dest_h");


$data_stream = "'".$_POST['funcName']."','".$_POST['head']."','".$_POST['beginExplain']."','".$_POST['mediumExplain']."','".$_POST['highExplain']."','".$uploads_dir."','".$dest."','".$dest_m."','".$dest_h."','".$_POST['beginEx']."','".$_POST['beginRe']."','".$_POST['mediumEx']."','".$_POST['mediumRe']."','".$_POST['highEx']."','".$_POST['highRe']."'";

$fName = $_POST['funcName'];
$hName = $_POST['head'];
$beName = $_POST['beginExplain'];
$meName = $_POST['mediumExplain'];
$heName = $_POST['highExplain'];
$bexName = $_POST['beginEx'];
$berName = $_POST['beginRe'];
$mexName = $_POST['mediumEx'];
$merName = $_POST['mediumRe'];
$hixName = $_POST['highEx'];
$hirName = $_POST['highRe'];

$query = "INSERT INTO `function`(`funcName`, `head`, `beginExplain`, `mediumExplain`, `highExplain`, `beginPic1`, `beginPic2`, `mediumPic1`, `highPic1`, `beginEx`, `beginRe`, `mediumEx`, `mediumRe`, `highEx`, `highRe`) VALUES (".$data_stream.") ON DUPLICATE KEY UPDATE funcName='$fName', head='$hName', beginExplain='$beName', mediumExplain='$meName', highExplain='$heName', beginPic1='$uploads_dir', beginPic2='$dest', mediumPic1='$dest_m', highPic1='$dest_h', beginEx='$bexName', beginRe='$berName', mediumEx='$mexName', mediumRe='$merName', highEx='$hixName', highRe='$hirName'";

  $result = mysqli_query($connect, $query);



if($result)
{
  echo '성공';
}
else {
  echo '실패';
}

mysqli_close($connect);


echo ('입력이 완료되었습니다.');
echo("<meta http-equiv='Refresh' content='2; URL=managerFunc.php'>");

?>
