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

$data_stream = "'".$_POST['funcName']."','".$_POST['head']."'";



$query = "INSERT INTO `function`(`funcName`, `head`) VALUES (".$data_stream.")";

  $result = mysqli_query($connect, $query);



if($result)
{
  echo '성공';
}
else {
  echo '실패';
}

mysqli_close($connect);


echo ('입력이 완료되었습니다. 메인 화면으로 이동합니다..');
echo("<meta http-equiv='Refresh' content='2; URL=index.html'>");

?>
