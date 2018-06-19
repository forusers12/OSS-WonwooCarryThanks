<?php
  include 'db.php';
	$bno = $_GET['head'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>'C' Library Academy</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">'C' Library Academy</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

				<?php
				$sql = mq("select distinct head from function");
										while( $row = $sql->fetch_array()) {
											$head = $row["head"];
					 ?>
					 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
						 <a class="nav-link" href="managerFunc.php?head=<?php echo $head; ?>">
							 <i class="fa fa-fw fa-table"></i>
							 <span class="nav-link-text"><?php echo $head;?></span>
						 </a>
					 </li>
				 <?php } ?>

      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" action="searchfuncName.php" method="get" id="indexSearch">
            <div class="input-group">
              <input class="form-control" type="text" name="searchterm"  placeholder="Search for...">
              <span class="input-group-append">
                <button type="submit" class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
<<<<<<< HEAD
<<<<<<< HEAD
              </span>
=======
=======
>>>>>>> origin/master
                <a class="navbar-brand" href="index.php">'C' Academy</a>
                <!--홈으로 돌아가기 추가-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">소개<span class="sr-only"></span></a></li>
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
>>>>>>> 7429b74a842875cb21ccf8cf314f11f539fee443
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
<<<<<<< HEAD
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
			<!-- Example DataTables Card-->
			<div class="card mb-3">
			  <div class="card-header">
			    <i class="fa fa-table"><?php echo $bno?></i></div>
			  <div class="card-body">
			    <div class="table-responsive">
			      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			        <thead>
			          <tr>
			            <th>함수명</th>
			            <th>기초설명</th>
			            <th>자세히보기</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>함수명</th>
			            <th>기초설명</th>
			            <th>자세히보기</th>
			          </tr>
			        </tfoot>
								 <tbody>
                   <?php
     							$sql = mq("select * from function");
     													while( $row = $sql->fetch_array()) {
     														$funcName = $row["funcName"];
     														$beginEx = $row['beginExplain'];
     														if(strlen($beginEx)>50){
     								 $beginEx=str_replace($row["beginExplain"],mb_substr($row["beginExplain"],0,50,"utf-8")."...",$row["beginExplain"]);
     							 }
     								 ?>
									 <tr>
								 <td><?php echo $funcName;?></a></td>
								 <td><?php echo $beginEx ?></td>
								 <td><a href="readManager.php?funcName=<?php echo $funcName; ?>">보기</td>

							 </tr>

               <?php } ?>

							 </tbody>
			      </table>

			    </div>
			  </div>
			</div>
			</div>
			<!-- /.container-fluid-->
			<!-- /.content-wrapper-->
			<footer class="sticky-footer">
        <a href="management.php">추가</a>
			<div class="container">
			  <div class="text-center">
			    <small>Copyright © Your Website 2018</small>
			  </div>
			</div>
			</footer>
			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
			</a>
			<!-- Logout Modal-->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
			    <div class="modal-header">
			      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
			      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">×</span>
			      </button>
			    </div>
			    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			    <div class="modal-footer">
			      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			      <a class="btn btn-primary" href="login.html">Logout</a>
			    </div>
			  </div>
			</div>
			</div>
			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			<!-- Page level plugin JavaScript-->
			<script src="vendor/chart.js/Chart.min.js"></script>
			<script src="vendor/datatables/jquery.dataTables.js"></script>
			<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
			<!-- Custom scripts for all pages-->
			<script src="js/sb-admin.min.js"></script>
			<!-- Custom scripts for this page-->
			<script src="js/sb-admin-datatables.min.js"></script>
			<script src="js/sb-admin-charts.min.js"></script>
			</div>
			</body>

			</html>
=======

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
         <td width="500"><a href="./readManager.php?funcName=<?php echo $funcName; ?>"><?php echo $funcName;?></a></td>

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
                        <a href="index.php" class="list-group-item">소개</a>
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
>>>>>>> 7429b74a842875cb21ccf8cf314f11f539fee443
