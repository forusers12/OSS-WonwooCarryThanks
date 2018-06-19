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
          <form class="form-inline my-2 my-lg-0 mr-lg-2" action="searchfuncName.php" method="get" id="indexSearch">
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
            <!-- 로그인 세션부분-->
            <?php
            if(isset($_SESSION['id'])){

              echo'<i class="fa fa-fw fa-sign-out"></i>Logout</a>';

            }
            else{
              echo'<li><a class="nav-link" href="login.html" id="nav2">로그인</a>';
              echo'</li>';

            }

            ?>
<!-- 로그인 세션부분-->
        </li>
      </ul>
    </div>
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
     							$sql = mq("select * from function where head ='$bno'");
     													while( $row = $sql->fetch_array()) {
     														$funcName = $row["funcName"];
     														$beginEx = $row['beginExplain'];
     														if(strlen($beginEx)>50){
     								 $beginEx=str_replace($row["beginExplain"],mb_substr($row["beginExplain"],0,50,"utf-8")."...",$row["beginExplain"]);
     							 }
     								 ?>
									 <tr>
								 <td><?php echo $funcName;?></a></td>
								 <td><?php echo $beginEx; ?></td>
								 <td><a href="viewFunc.php?funcName=<?php echo $funcName; ?>">보기</td>
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
			      <h5 class="modal-title" id="exampleModalLabel">로그아웃</h5>
			      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">×</span>
			      </button>
			    </div>
			    <div class="modal-body">로그아웃 하시겠습니까?</div>
			    <div class="modal-footer">
			      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			      <a class="btn btn-primary" href="./login/logout.php">Logout</a>
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
