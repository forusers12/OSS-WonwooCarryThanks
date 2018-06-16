<?php
include ("db.php");

header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET['funcName'];
	$sql = mq("select * from function where funcName='".$bno."'");
	$board = $sql->fetch_array();
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
<ul>
	<li class="read w10 fl">함수이름</li>
	<li class="read_con">&nbsp;<?php echo $board['funcName'];?></li>

</ul>
<ul>
	<li class="read w10 fl">헤더이름</li>
	<li class="read_con">&nbsp;<?php echo $board['head'];?></li>

</ul>
<ul>
	<li class="read_nl fl">초급자 설명</li>
	<li class="read_nl_con"><?php echo nl2br("$board[beginExplain]"); ?></li>
</ul>
<ul>
	<li class="read_nl fl">중급자 설명</li>
	<li class="read_nl_con"><?php echo nl2br("$board[mediumExplain]"); ?></li>
</ul>
<ul>
	<li class="read_nl fl">고급자 설명</li>
	<li class="read_nl_con"><?php echo nl2br("$board[highExplain]"); ?></li>
</ul>
<ul>
	<li class="read_nl fl">초급자 실행사진</li>

  <img src = />;
</ul>
</div>
<div class="bo_ser">
	<ul>
		<li><a href="../index.php">[목록으로]</a></li>
		<li><a href="">[수정]</a></li>
		<li><a href="">[삭제]</a></li>
	</ul>
</div>
 </body>
</html>
