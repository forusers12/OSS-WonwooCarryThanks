<?php
  include "db.php";
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ko" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>'C' Library Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script type="text/javascript" src="assets/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<style>
@font-face {
      font-family: '주아';
      src: url(assets/fonts/주아.ttf) format('truetype');
}
body {
    font-family: '주아';
}
a {
    font-family: '주아';
}
#nav1, #nav2, #nav3 { font-size: 18px; }
#indexSearch{ margin:-15px; padding-right: 120px;}
#nav1 {padding-right: 30px;}
#nav2 {padding-right: 30px;}
#nav3 {padding-right: 30px;}

</style>




<body>
    <div class="pre-loader">
        <div class="load-con">
            <img src="assets/img/freeze/cat.png" class="animated fadeInDown" alt="" width="120" height="120">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/freeze/cat.png" alt="" class="logo"  width="120" height="120">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#about"></a>
                            <form class="navbar-form navbar-left" action="func_list.php" method="post" id="indexSearch">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="searchterm" placeholder="함수를 입력하세요.">
                                </div>
                                <button type="submit" class="btn btn-default">검색</button>
                            </form>
                            </li>


                            <li ><a href="c.php" id="nav1">C</a>
                            </li>
                            <li><a href="login.html" id="nav2">로그인</a>
                            </li>
                            <li><a href="register.html" id="nav3">회원가입</a>
                            </li>


                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>
            </header>
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

                     $head = $row['head'];
                     $beginEx = $row['beginExplain'];
                     if(strlen($beginEx)>30){
          $beginEx=str_replace($row["beginExplain"],mb_substr($row["beginExplain"],0,30,"utf-8")."...",$row["beginExplain"]);
        }
          ?>
          <tbody>
            <tr>
          <td width="120"><a href="read.php?funcName=<?php echo $funcName; ?>"><?php echo $funcName;?></a></td>
          <th width = "120"><?php echo $row['head'] ?></th>
          <th width = "500"><?php echo $row['beginExplain'] ?></th>
        </tr>
        </tbody>
        <?php } ?>
      </table>
     </article>
     </section>
     <footer>
         <div class="container">

             <a href="#" class="scrollpoint sp-effect3">
                 <img src="assets/img/freeze/cat.png" alt="" class="logo"  width="120" height="120">
             </a>
             <div class="social">
                 <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                 <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                 <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
             </div>
             <div class="rights">
                 <p>Copyright &copy; 2018</p>
                 <p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>
             </div>
         </div>
     </footer>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
<!-- 해당 선언은 외부 스타일시트와 같은 역할을 한다고 보면 된다.
외부의 자바스크립트를 가져오는 선언이다. -->

</body>

</html>
