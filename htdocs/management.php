<?php
  include 'db.php';
  header('Content-Type: text/html; charset=utf-8');
  	$bno = $_GET['funcName'];
  	$sql = mq("select * from function where funcName='".$bno."'");
  	$board = $sql->fetch_array();
  	$src = $board['route'];

		$funcName = $board['funcName'];
		$exPic = $board['exPic'];
		$printPic = $board['printPic'];

?>
<!DOCTYPE html>
<html lang="ko">

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
						 <a class="nav-link" href="tables.php?head=<?php echo $head; ?>">
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
          <form class="form-inline my-2 my-lg-0 mr-lg-2" action="searchName.php" method="get" id="indexSearch">
            <div class="input-group">
              <input class="form-control" type="text" name="searchterm"  placeholder="Search for...">
              <span class="input-group-append">
                <button type="submit" class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
			<!-- Example DataTables Card-->
			<div class="card mb-3">
			  <div class="card-body">
					<form action="managerDB.php" data-ajax="false" method="post" enctype="multipart/form-data">
						<label for="funcName">함수이름</label> <br>
  <input type="text" id="funcName" name="funcName"  required><br>


	<label for="head">헤더이름</label> <br>
<input type="text" id="head" name="head"> <br>



<label for="beginExplain">기초 설명</label> <br>
  <input type="text" style=" width:1000px; height:200px; " id="beginExplain" name="beginExplain"><br>

<p></p>
<label for="parameter">입력 매개변수 리스트</label> <br>
  <input type="text"style=" width:600px; height:100px; " id="parameter" name="parameter"><br>


	<label for="returnValue">반환값</label> <br>
	  <input type="text"style=" width:600px; height:100px; " id="returnValue" name="returnValue"><br>

		<label for="returnValue2">반환값2</label> <br>
			<input type="text"style=" width:600px; height:100px; " id="returnValue2" name="returnValue2" ><br>

			<label for="exPic">예제 사진</label> <br>

			  <input type="file" id="exPic" name="exPic"><br>


				<label for="printPic">결과 사진</label> <br>
				<input type="file" id="printPic" name="printPic"><br>



				<br><br>

				<input type="submit" value="확인">
				<input type="reset" value="취소">


			</form>
			  </form>
			  </div>
			</div>
			</div>
			<!-- /.container-fluid-->
			<!-- /.content-wrapper-->
			<footer class="sticky-footer">
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
