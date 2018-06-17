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


  <label for="beginPic1">초급자 실행사진1</label>

  <input type="file" id="beginPic1" name="beginPic1"><br>
	<?php echo "<img src = $src$beginpic>"?>


	<li class="read_nl fl">중급자 실행사진</li>

	<?php echo "<img src = $src$mediumpic>"?>


	<li class="read_nl fl">고급자 실행사진</li>

	<?php echo "<img src = $src$highpic>"?>

	<li class="read_nl fl">초급자 예제</li>
	<li class="read_nl_con"><?php echo nl2br("$board[beginEx]"); ?></li>

	<li class="read_nl fl">초급자 예제 결과</li>
	<li class="read_nl_con"><?php echo nl2br("$board[beginRe]"); ?></li>

	<li class="read_nl fl">중급자 예제</li>
	<li class="read_nl_con"><?php echo nl2br("$board[mediumEx]"); ?></li>

	<li class="read_nl fl">중급자 예제 결과</li>
	<li class="read_nl_con"><?php echo nl2br("$board[mediumRe]"); ?></li>

	<li class="read_nl fl">고급자 예제</li>
	<li class="read_nl_con"><?php echo nl2br("$board[highEx]"); ?></li>

	<li class="read_nl fl">고급자 예제 결과</li>
	<li class="read_nl_con"><?php echo nl2br("$board[highRe]"); ?></li>

</div>
<div class="bo_ser">
	<ul>
		<li><a href="./managerFunc.php">[목록으로]</a></li>
		<li><a href="./managerDB.php">[수정]</a></li>
		<li><a href="delDB.php?funcName=<?php echo $funcName; ?>">[삭제]</a></li>
	</ul>
</div>
 </body>
</html>
