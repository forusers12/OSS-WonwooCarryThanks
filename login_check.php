<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$mysqli=mysql_connect("localhost","root","123456","testdb");

$check="SELECT * from member where userid='$id'";
$result=$mysqli->query($check);
if($result->mysql_num_rows==1){
  $row = $result->mysql_fetch_array(MYSQLI_ASSOC);
  if($row['userpw']==$pw){
    $_SESSION['userid']=$id;
    if(isset($_SESSION['userid']))
    {
      header('Location:./main.php');
    }
    else{
      echo "세션 저장 실패";
    }
  }
  else{
    echo "wrong id or pw";
  }
}
else{
  echo "wrong id or pw";
}
?>
