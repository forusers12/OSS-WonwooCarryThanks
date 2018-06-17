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
    <style type="text/css">

h3{color: red;}
</head>
<!-- link rel="stylesheet"은 외부 스타일시트를 선언하는 태그 -->



<body>
    <style type="text/css">
        .jumbotron {
            background-image: url('images/jumbotron.jpg');
            background-size: cover;
            text-shadow: black 0.2em 0.2em 0.2em;
            color: white;
        }

        .media-object {
            width: 150px;
            height: auto;
            /* auto로 설정하면 width의 크기를 따라간다 */
        }
    </style>
    <!-- 위와 같은 선언은 내부 CSS 선언이라고함
대형전광판 역할을 하고 있는 jumbotron을 보여주고 있는 모습이다.-->

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">'C' Academy</a>
                <!--홈으로 돌아가기 추가-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">소개<span class="sr-only"></span></a></li>
                    <li><a href="instructor.html">강사진</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">강의<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="lectureF.php">C</a></li>
                            <li><a href="lecture.html?lectureName=Java">Java</a></li>
                        </ul>
                    </li>
                </ul>
                <!--검색 php 전달을 위한 문구 삽입
                -->
                <form class="navbar-form navbar-left" action="func_list.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchterm" placeholder="내용을 입력하세요.">
                    </div>
                    <button type="submit" class="btn btn-default">검색</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=dropdown>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="loginForm.html">로그인</a></li>
                            <li><a href="registerForm.html">회원가입</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h3>함수</h3>
    <div class="row"> <div class="col-sm-0"> 　</div>
        <form name="selectlist" method="post">
            <ul>
                <div class="col-sm-2">
                  <label><input type ="radio" name = "list" value = "funcName" checked="checked" /><a href ="managerFunc.php"> 함수로 보기</a></label>
                  <label><input type ="radio" name = "list" value = "head" /><a href ="managerHead.php"> 헤더로 보기</a></label>
                </div>
            </ul>
        </form>
    </div>

     <table class="list-table">
       <thead>
           <tr>
               <th width="500">함수명</th>
            </tr>
         </thead>
      <?php
      $sql = mq("select * from function");
                  while( $row = $sql->fetch_array()) {
                    $funcName = $row["funcName"];

         ?>
         <tbody>
           <tr>
         <td width="500"><a href="/read.php?funcName=<?php echo $funcName; ?>"><?php echo $funcName;?></a></td>
       </tr>
       </tbody>
       <?php } ?>
       	<li><a href="management.php">추가</a></li>
     </table>

    <div class="container">
        <hr>
        <form class="form-horizontal">
            <div class="form-group">
                <albel>댓글: </label>
                    <textarea class="form-control" rows="5" id="commentXnotent" name="commentContent"></textarea>
                    <br>
                    <button type="submit" class="btn pull-right">등록</button>
            </div>
        </form>
        <hr>
    </div>

    <footer style="background-color: #000000; color: #ffffff">
        <div class="container" <br>
            <div class="row">
                <div class="col-sm-2" style="text-align: center;">
                    <h5>Copyright &copy; 2018</h5>
                    <h5>너나들이(정민수,김한결,조원우,이현수)</h5></div>
                <div class="col-sm-4">
                    <h4>팀 소개</h4>
                    <p>저희는 오픈소스 너나들이팀입니다. 선문대학교에서 김봉재교수님 수업을 듣고 있습니다.</p>
                </div>
                <div class="col-sm-2">
                    <h4 style="text-align: center;">네비게이션</h4>
                    <div class="list-group">
                        <a href="index.html" class="list-group-item">소개</a>
                        <a href="instructor.html" class="list-group-item">강사진</a>
                        <a href="lecture.html" class="list-group-item">강의</a>
                    </div>
                </div>

                <div class="col-sm-2">
                    <h4 style="text-align: center;">SNS</h4>
                    <div class="list-group">
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
                        저희 서비스의 특징은 단순 텍스트 제공뿐만 아니라, <br> 강의로 들을 수 있다는 점입니다. <br><br>
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
