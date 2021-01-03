<?
$conn= mysqli_connect('localhost','root','0000','capstone','3306');


$sql = "SELECT appname FROM myapp WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$myapp1 = $row['appname'];

$sql = "SELECT appname FROM myapp WHERE id = 2";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$myapp2 = $row['appname'];

$sql = "SELECT appname FROM myapp WHERE id = 3";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$myapp3 = $row['appname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TMI Review</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul
            class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a
                class="sidebar-brand d-flex align-items-center justify-content-center"
                href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TMI REVIEW</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                MAIN
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapsePages"
                    aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>MY APPS</span>
                </a>
                <div
                    id="collapsePages"
                    class="collapse"
                    aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">My APP 목록 :</h6>
                        <a class="collapse-item" href="index.html">First APP</a>
                        <a class="collapse-item" href="secondAPP.html">Second APP</a>
                        <a class="collapse-item" href="thridAPP.html">Third APP</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">MY APP 관리:</h6>
                        <a class="collapse-item" href="app-setting.html">설정</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="404.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Recommend</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                SUB
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings :</h6>
                        <a class="collapse-item" href="buttons.html">계정</a>
                        <a class="collapse-item" href="cards.html">알림</a>
                        <a class="collapse-item" href="cards.html">도움말</a>
                        <a class="collapse-item" href="cards.html">정보</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav
                    class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button
                        id="sidebarToggleTop"
                        class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control bg-light border-0 small"
                                placeholder="Search for..."
                                aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="alertsDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div
                                class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    알림 센터
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">June 01, 2020</div>
                                        <span class="font-weight-bold">새로운 분석 데이터가 업데이트 되었습니다.</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">May 26, 2020</div>
                                        저번 업데이트 기준으로 [부정] 리뷰가 많습니다.
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">May 25, 2020</div>
                                        새로운 분석 데이터가 업데이트 되었습니다.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="userDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Choco</span>
                                <img
                                    class="img-profile rounded-circle"
                                    src="choco.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div
                                class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a
                                    class="dropdown-item"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <p><h1 class="h3 mb-1 text-gray-800">MY APP 관리</h1></p>
          <p class="mb-4">MY APP을 편집할 수 있습니다. 최대 5개까지 MY APP 설정이 가능합니다. </p>

          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-6">

              <div class="card mb-4 py-3 border-left-primary" >
                <div class="card-body">
                 First APP<br>
                 <?
                 if($smyapp1 =='roblox')
                 {?>  <img src="roblox.webp" style="width:80px; height:80px;">
                   <?echo 'ROBLOX';}
                 else if($myapp1 =='kartrider'){?>
                   <img src="kartrider.webp" style="width:80px; height:80px;">
                   <?echo '카트라이더 러쉬플러스';
                 }else if($myapp1 =='cookierun'){?>
                   <img src="cookierun.webp" style="width:80px; height:80px;">
                   <?echo '쿠키런 for Kakao';
                 }
                 ?>
                </div>
              </div>

              <div class="card mb-4 py-3 border-left-success">
                <div class="card-body">
                  Second APP<br>
                  <?
                  if($myapp2 =='roblox')
                  {?>  <img src="roblox.webp" style="width:80px; height:80px;">
                    <?echo 'ROBLOX';}
                  else if($myapp2 =='kartrider'){?>
                    <img src="kartrider.webp" style="width:80px; height:80px;">
                    <?echo '카트라이더 러쉬플러스';
                  }else if($myapp2 =='cookierun'){?>
                    <img src="cookierun.webp" style="width:80px; height:80px;">
                    <?echo '쿠키런 for Kakao';
                  }
                  ?>
                </div>
              </div>

              <div class="card mb-4 py-3 border-left-info">
                <div class="card-body">
                  Third APP<br>
                  <?
                  if($myapp3 =='roblox')
                  {?>  <img src="roblox.webp" style="width:80px; height:80px;">
                    <?echo 'ROBLOX';}
                  else if($myapp3 =='kartrider'){?>
                    <img src="kartrider.webp" style="width:80px; height:80px;">
                    <?echo '카트라이더 러쉬플러스';
                  }else if($myapp3 =='cookierun'){?>
                    <img src="cookierun.webp" style="width:80px; height:80px;">
                    <?echo '쿠키런 for Kakao';
                  }
                  ?>
                </div>
              </div>

              <div class="card mb-4 py-3 border-left-warning">
                <div class="card-body">
                  없음
                </div>
              </div>

              <div class="card mb-4 py-3 border-left-danger">
                <div class="card-body">
                  없음
                </div>
              </div>
              <div style="text-align:center;">
              <a href="#" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">편집</span>
              </a>
            </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; TMI REVIEW 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div
class="modal fade"
id="logoutModal"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true">
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
            <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
            <a class="btn btn-primary" href="login.html">확인</a>
        </div>
    </div>
</div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
