<?php
include ("db.php");

header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET['funcName'];
	$sql = mq("select * from function where funcName='".$bno."'");
	$board = $sql->fetch_array();
  $funcName = $board['funcName'];
	$src = $board['beginPic1'];
$beginpic = $board['beginPic2'];
$mediumpic = $board['mediumPic1'];
$highpic = $board['highPic1'];
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




  <label for="beginExplain">초급자 설명</label>
  <input type="text" id="beginExplain" name="beginExplain" value="<?php echo nl2br("$board[beginExplain]"); ?>"><br>


  <label for="mediumExplain">중급자 설명</label>
  <input type="text" id="mediumExplain" name="mediumExplain" value="<?php echo nl2br("$board[mediumExplain]"); ?>"><br>


  <label for="highExplain">고급자 설명</label>
  <input type="text" id="highExplain" name="highExplain" value="<?php echo nl2br("$board[highExplain]"); ?>"><br>


  <label for="beginPic2">초급자 실행사진1</label>

  <input type="file" id="beginPic2" name="beginPic2"><br>
	<?php echo "<img src = $src$beginpic>"?><br>


	<label for="mediumPic1">중급자 실행사진1</label>
	<input type="file" id="mediumPic1" name="mediumPic1"><br>

	<?php echo "<img src = $src$mediumpic>"?><br>


	<label for="highPic1">고급자 실행사진1</label>
	<input type="file" id="highPic1" name="highPic1"><br>

	<?php echo "<img src = $src$highpic>"?><br>

	<label for="beginEx">초급자 예제</label>
	<input type="text" id="beginEx" name="beginEx" value="<?php echo nl2br("$board[beginEx]"); ?>"><br>


	<label for="beginRe">초급자 예제 결과</label>
	<input type="text" id="beginRe" name="beginRe" value="<?php echo nl2br("$board[beginRe]"); ?>"><br>


	<label for="mediumEx">중급자 예제</label>
	<input type="text" id="mediumEx" name="mediumEx" value="<?php echo nl2br("$board[mediumEx]"); ?>"><br>


	<label for="mediumRe">중급자 예제 결과</label>
	<input type="text" id="mediumRe" name="mediumRe" value="<?php echo nl2br("$board[mediumRe]"); ?>"><br>


	<label for="highEx">고급자 예제</label>
	<input type="text" id="highEx" name="highEx" value="<?php echo nl2br("$board[highEx]"); ?>"><br>


	<label for="highRe">고급자 예제 결과</label>
	<input type="text" id="highRe" name="highRe" value="<?php echo nl2br("$board[highRe]"); ?>"><br>

	<br><br>
	<input type="submit" value="수정확인">
	<input type="reset" value="취소">
	<a href="./managerFunc.php">[목록으로]</a>
	<a href="delDB.php?funcName=<?php echo $funcName; ?>">[삭제]</a>
  </form>
</div>


 </body>
</html>
