<?
$conn= mysqli_connect('localhost','root','0000','capstone','3306');

$searchapp = $_GET['varapp'];
$var_value = $_GET['varname'];
$searchapp = $_GET['varapp'];

$hi_var_value;

if($var_value=='광고'){
  $hi_var_value = '광고';
}else if($var_value=='결제' || $var_value=='충전' || $var_value=='구매' || $var_value=='현질' || $var_value=='환불'){
  $hi_var_value = '결제';
}else if($var_value=='계정' || $var_value=='아이디' || $var_value=='연동' || $var_value=='로그인' || $var_value=='가입'){
  $hi_var_value = '계정';
}else if($var_value=='서버' || $var_value=='연결' || $var_value=='접속' || $var_value=='로딩' || $var_value=='네트워크'){
  $hi_var_value = '서버';
}else if($var_value=='구성' || $var_value=='이벤트' || $var_value=='퀘스트' || $var_value=='스테이지' || $var_value=='난이도'){
  $hi_var_value = '구성';
}else if($var_value=='모션' || $var_value=='배경' || $var_value=='그래픽' || $var_value=='소리' || $var_value=='디자인'){
  $hi_var_value = '연출';
}else if($var_value=='캐릭터' || $var_value=='스킬' || $var_value=='영웅' || $var_value=='아이템' || $var_value=='스킨'){
  $hi_var_value = '캐릭터';
}else if($var_value=='업데이트' || $var_value=='용량' || $var_value=='다운' || $var_value=='버그' || $var_value=='설치'){
  $hi_var_value = '시스템';
}

//관심앱 설정
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
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>TMI REVIEW - Emotion</title>

        <!-- Custom fonts for this template-->
        <link
            href="vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <script>
            function changeIframeUrl(url,emoti) {
                var emo = emoti;
                var value = "<? echo $var_value;?>";
                document
                    .getElementById("review_frame")
                    .src = url;
            }
        </script>

    </head>

    <body id="page-top">
        <script>
        <?
        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3 = '$var_value') AND emotion = '긍정'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $emo_count1 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3 = '$var_value') AND emotion = '약한 긍정'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $emo_count2 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3 = '$var_value') AND emotion = '약한 부정'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $emo_count3 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3 = '$var_value') AND emotion = '부정'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $emo_count4 = $row['count(writer)'];

        ?>
        var emo1 = "<? echo $emo_count1;?>";
        var emo2 = "<? echo $emo_count2;?>";
        var emo3 = "<? echo $emo_count3;?>";
        var emo4 = "<? echo $emo_count4;?>";
        </script>
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="main.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">TMI REVIEW</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">
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
                            <a class="collapse-item" href="main.php?vargame=<?echo $myapp1?>">First APP</a>
                            <a class="collapse-item" href="main.php?vargame=<?echo $myapp2?>">Second APP</a>
                            <a class="collapse-item" href="main.php?vargame=<?echo $myapp3?>">Third APP</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">MY APP 관리:</h6>
                            <a class="collapse-item" href="app-setting.php">설정</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.php?varapp=<?echo $searchapp?>">
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
                            <a class="collapse-item" href="404.html">계정</a>
                            <a class="collapse-item" href="404.html">알림</a>
                            <a class="collapse-item" href="404.html">도움말</a>
                            <a class="collapse-item" href="404.html">정보</a>
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
                        <h1 class="h3 mb-2 text-gray-800"><?
                        if($searchapp =='roblox')
                        {?>  <img src="roblox.webp" style="width:100px; height:100px;">
                          <?echo 'ROBLOX';}
                        else if($searchapp =='kartrider'){?>
                          <img src="kartrider.webp" style="width:100px; height:100px;">
                          <?echo '카트라이더 러쉬플러스';
                        }else if($searchapp =='cookierun'){?>
                          <img src="cookierun.webp" style="width:100px; height:100px;">
                          <?echo '쿠키런 for Kakao';
                        }else if($searchapp =='candycrush'){?>
                            <img src="candycrush.webp" style="width:100px; height:100px;">
                            <?echo '캔디크러쉬사가';
                        }
                          ?></h1>
                        <p class="mb-4">[ <?echo $hi_var_value?> ] &nbsp;>> &nbsp;
                            <a href="tables.php?vargame=<?echo $searchapp?>&varname=<?echo $var_value?>">[ <?echo $var_value?> ]</a>&nbsp; >> &nbsp;[ 감정분석 ]</p>

                        <!-- Content Row -->
                        <div class="row">

                            <div class="col-xl-6 col-lg-7">

                                <!-- Bar Chart -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">감정분석</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                        <hr>
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        <a href="#" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text"onclick="changeIframeUrl('./emotion_review.php?varapp=<?echo $searchapp?>&varname=<? echo $var_value?>&varemo=부정')">부정</span>
                                        </a>
                                        &emsp;&emsp;&emsp;
                                        <a href="#" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text"onclick="changeIframeUrl('./emotion_review.php?varapp=<?echo $searchapp?>&varname=<? echo $var_value?>&varemo=약한 부정')">약한부정</span>
                                        </a>
                                        &emsp;&emsp;
                                        <a href="#" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text"onclick="changeIframeUrl('./emotion_review.php?varapp=<?echo $searchapp?>&varname=<? echo $var_value?>&varemo=약한 긍정')">약한긍정</span>
                                        </a>
                                        &emsp;&emsp;&emsp;
                                        <a href="#" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text"onclick="changeIframeUrl('./emotion_review.php?varapp=<?echo $searchapp?>&varname=<? echo $var_value?>&varemo=긍정')">긍정</span>
                                        </a>
                                        <br><br>
                                        <p style="text-align:center;">각 리뷰들을 감정 분석을 통해서 4단계(부정, 약한부정, 약한긍정, 긍정)의 감정 상태로 나타내어
                                            <br>
                                            각 단계의 리뷰 개수를 Counting한 결과.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Donut Chart -->
                            <div class="col-xl-6 col-lg-7">
                                <div class="reviewpage">
                                    <iframe
                                        src=""
                                        width="100%"
                                        height="100%"
                                        frameborder="0"
                                        border="0"
                                        scrolling="yes"
                                        bgcolor="#EEEEEE"
                                        bord="bord"
                                        ercolor="#FF000000"
                                        marginwidth="0"
                                        marginheight="0"
                                        name="review_frame"
                                        id="review_frame"></iframe>
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

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script src="js/demo/chart-bar-demo.js"></script>

        </body>

    </html>
