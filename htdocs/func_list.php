<?php
  include "db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>'C' Library Academy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mainpage.css">
    <style type = "text/css">
      table {
        border:0;
        border-collapse : collapse;
        border-spacing : 0;
      }
      table td, table th{
        border : 1px, solid;
        padding : 2px 5px 2px 5px;
      }
      .text-center {text-align: center;}
      .text-right {text-align : right; }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.html">'C' Academy</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">소개<span class="sr-only"></span></a></li>
                    <li><a href="#">강사진</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">강의<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/beginList.html">초급자</a></li>
                            <li><a href="#">중급자</a></li>
                            <li><a href="#">고급자</a></li>
                        </ul>
                    </li>
                </ul>
                <!--검색 php 전달을 위한 문구 삽입
                -->
                <form class="navbar-form navbar-left" action ="func_list.php" method = "post">
                    <div class="form-group">
                        <input type="text" class="form-control" name = "searchterm" placeholder="내용을 입력하세요.">
                    </div>
                    <button type="submit" class="btn btn-default">검색</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=dropdown>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">로그인</a></li>
                            <li><a href="#">회원가입</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
      <article><h1>검색결과</h1>
      <h4>제목 검색</h4>
      <table class="list-table">
        <thead>
            <tr>
                <th width="120">함수명</th>
                <th width = "120">헤더</th>
                <th width = "500">기초 설명</th>
             </tr>
          </thead>
       <?php
       $function = $_POST['searchterm'];
       $sql = mq("select * from function where funcName like '%$function%'");
                   while( $row = $sql->fetch_array()) {
                     $funcName = $row["funcName"];
                     $num = $row["num"];
                     $head = $row['head'];
                     $beginEx = $row['beginExplain'];
                     if(strlen($beginEx)>30){
          $beginEx=str_replace($row["beginExplain"],mb_substr($row["beginExplain"],0,30,"utf-8")."...",$row["beginExplain"]);
        }
          ?>
          <tbody>
            <tr>
          <td width="120"><a href="board/read.php?num=<?php echo $num; ?>"><?php echo $funcName;?></a></td>
          <th width = "120"><?php echo $row['head'] ?></th>
          <th width = "500"><?php echo $row['beginExplain'] ?></th>
        </tr>
        </tbody>
        <?php } ?>
      </table>
     </article>
     </section>
    <footer style="background-color: #000000; color: #ffffff">
        <div class="container"
            <br>
            <div class="row">
                <div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2018</h5><h5>너나들이(정민수,김한결,조원우,이현수)</h5></div>
                <div class="col-sm-4"><h4>팀 소개</h4><p>저희는 오픈소스 너나들이팀입니다. 선문대학교에서 김봉재교수님 수업을 듣고 있습니다.</p></div>
                <div class="col-sm-2"><h4 style="text-align: center;">네비게이션</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">소개</a>
                        <a href="#" class="list-group-item">강사진</a>
                        <a href="#" class="list-group-item">강의</a>
                    </div>
                </div>

                <div class="col-sm-2"><h4 style="text-align: center;">SNS</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Facebook</a>
                        <a href="#" class="list-group-item">Youtube</a>
                        <a href="#" class="list-group-item">Naver</a>
                    </div>
                </div>
            </div>
    </footer>
    <div class="row">
        <div class="modal" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        'C' Library Academy의 특징
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        저희 서비스의 특징은 단순 텍스트 제공뿐만 아니라, <br>
                        강의로 들을 수 있다는 점입니다. <br><br>
                        <img src="images/lecture.jpg" id="imagepreview" style="width: 256px; hegiht: 256px;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
<!-- 해당 선언은 외부 스타일시트와 같은 역할을 한다고 보면 된다.
외부의 자바스크립트를 가져오는 선언이다. -->

</body>

</html>
