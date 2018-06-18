<?php
include ("db.php");

header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET['funcName'];
	$sql = mq("select * from function where funcName='".$bno."'");
	$board = $sql->fetch_array();
  $funcName = $board['funcName'];
	$src = $board['route'];
$exPic = $board['exPic'];
$printPic = $board['printPic'];

	?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>'C' Academy</title>
  <link rel="stylesheet" href="../style.css" />
 </head>
 <body>
 <div id="board_read">

	<form action="managerDB.php" data-ajax="false" method="post" enctype="multipart/form-data">

  <label for="funcName">함수이름</label>
  <input type="text" id="funcName" name="funcName" value="<?php echo $board['funcName'];?>"  required><br>




  <label for="head">헤더이름</label>
  <input type="text" id="head" name="head" value="<?php echo $board['head'];?>"> <br>




  <label for="beginExplain">기초 설명</label>
  <input type="text" id="beginExplain" name="beginExplain" value="<?php echo nl2br("$board[beginExplain]"); ?>"><br>


  <label for="parameter">입력 매개변수 리스트</label>
  <input type="text" id="parameter" name="parameter" value="<?php echo nl2br("$board[parameter]"); ?>"><br>


  <label for="returnValue">반환값</label>
  <input type="text" id="returnValue" name="returnValue" value="<?php echo nl2br("$board[returnValue]"); ?>"><br>
	<label for="returnValue2">반환값2</label>
	<input type="text" id="returnValue2" name="returnValue2" value="<?php echo nl2br("$board[returnValue2]"); ?>"><br>


  <label for="exPic">예제 사진</label>

  <input type="file" id="exPic" name="exPic"><br>
	<?php echo "<img src = $src$exPic>"?><br>


	<label for="printPic">결과 사진</label>
	<input type="file" id="printPic" name="printPic"><br>

	<?php echo "<img src = $src$printPic>"?><br>

	<br><br>
	<input type="submit" value="수정확인">
	<input type="reset" value="취소">
	<a href="./managerFunc.php">[목록으로]</a>
	<a href="delDB.php?funcName=<?php echo $funcName; ?>">[삭제]</a>
  </form>
</div>


 </body>
</html>
