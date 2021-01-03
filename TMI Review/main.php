
<?php
$conn= mysqli_connect('localhost','root','0000','capstone','3306');

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

//로그인시 처음에는 관심앱1 띄운다
if($_POST['wanted']==null){
$searchapp = $myapp1;}
else if($_POST['wanted']=='roblox'||$_POST['wanted']=='로블록스'||$_POST['wanted']=='ROBLOX'){
$searchapp ='roblox';
}else if($_POST['wanted']=='kartrider'||$_POST['wanted']=='카트라이더'){
$searchapp ='kartrider';
}else if($_POST['wanted']=='cookierun'||$_POST['wanted']=='쿠키런'){
  $searchapp ='cookierun';
}else if($_POST['wanted']=='candy'||$_POST['wanted']=='candycrush'||$_POST['wanted']=='캔디크러쉬'||$_POST['wanted']=='캔디'||$_POST['wanted']=='캔디크러쉬사가'){
  $searchapp ='candycrush';
}

//게임 바뀔때
if(isset($_GET['vargame'])){
  $searchapp = $_GET['vargame'];
}

$sql = "SELECT count(writer) FROM $searchapp";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$emo_all_data = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE emotion = '긍정'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$emo_posive_data = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE emotion = '약한 긍정'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$emo_pposive_data = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE emotion = '부정'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$emo_negative_data = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE emotion = '약한 부정'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$emo_nnegative_data = $row['count(writer)'];


$sql = "SELECT count(writer) FROM $searchapp";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$all_data = $row['count(writer)'];

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

        <title>TMI REVIEW</title>

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
            function changeIframeUrl(url) {
                document.getElementById("main_frame").src = url;
            }
        </script>

    </head>

    <body id="page-top">
      <script>
      <?php
      $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '광고' or category2 = '광고' or category3= '광고'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $all_count1 = $row['count(writer)'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $all_count2 = $row['count(writer)'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $all_count3 = $row['count(writer)'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $all_count4 = $row['count(writer)'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $all_count5 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $all_count6 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $all_count7 = $row['count(writer)'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $all_count8 = $row['count(writer)'];
        ?>

        var cat1 = "<? echo $all_count1;?>";
        var cat2 = "<? echo $all_count2;?>";
        var cat3 = "<? echo $all_count3;?>";
        var cat4 = "<? echo $all_count4;?>";
        var cat5 = "<? echo $all_count5;?>";
        var cat6 = "<? echo $all_count6;?>";
        var cat7 = "<? echo $all_count7;?>";
        var cat8 = "<? echo $all_count8;?>";


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
                    href="main.php">
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
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                            action = main.php
                            method = "post">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control bg-light border-0 small"
                                    name = "wanted"
                                    placeholder="app name을 입력하세요"
                                    aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">
                              <?
                              if($searchapp =='roblox')
                              {?>  <img src="roblox.webp" style="width:130px; height:130px;">
                                <?echo 'ROBLOX';}
                              else if($searchapp =='kartrider'){?>
                                <img src="kartrider.webp" style="width:130px; height:130px;">
                                <?echo '카트라이더 러쉬플러스';
                              }else if($searchapp =='cookierun'){?>
                                <img src="cookierun.webp" style="width:130px; height:130px;">
                                <?echo '쿠키런 for Kakao';
                              }else if($searchapp =='candycrush'){?>
                                <img src="candycrush.webp" style="width:130px; height:130px;">
                                <?echo '캔디크러쉬사가';
                              }
                              ?>
                            </h1>

                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <?
                                if($searchapp =='roblox'){
                                  echo 'ROBLOX Corporation';}
                                else if($searchapp =='kartrider'){
                                  echo 'NEXON Company';
                                }else if($searchapp =='cookierun'){
                                  echo 'Devsisters Corporation';
                                }else if($searchapp =='candy'){
                                  echo 'King';
                                }
                                ?></a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">총 리뷰 개수</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$emo_all_data?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">긍정적인 리뷰</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="tables.php?vargame=<?echo $searchapp?>&varemo=긍정"><?=$emo_posive_data+$emo_pposive_data?></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">부정적인 리뷰</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="tables.php?vargame=<?echo $searchapp?>&varemo=부정"><?=$emo_negative_data+$emo_nnegative_data?></a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example-->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">단순 리뷰</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                          <?
                                                          $sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '기타'";

                                                          $result = mysqli_query($conn, $sql);
                                                          $row = mysqli_fetch_array($result);
                                                          $gt_count = $row['count(writer)'];
                                                          ?>
                                                            <a href="tables.php?vargame=<?echo $searchapp?>&varname=기타"><?=$gt_count?></a></div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="h7 mb-0 text-gray-800" align="center"><?=round($gt_count/$all_data*100)?>%</h6>
                                                        <div class="progress progress-sm mr-2">
                                                            <div
                                                                class="progress-bar bg-info"
                                                                role="progressbar"
                                                                style="width: <?=round($gt_count/$all_data*100)?>%"
                                                                aria-valuenow="50"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Pie Chart -->
                            <div class="col-xl-6 col-lg-8">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">상위 카테고리</h6>
                                        <h6 class="m-0 font-weight text-dark">단순 리뷰를 제외한 나머지 리뷰들로 구성</h6>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold text-dark">총 [<?echo $all_count1+$all_count2+$all_count3+$all_count4+$all_count5+$all_count6+$all_count7?>]개</h6><br>
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <p><br>
                                            <span class="dropdown mb-4">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownAd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category1.php?varapp=<?echo $searchapp?>')" >
                                                  광고
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAd">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=광고">광고</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownPayment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category2.php?varapp=<?echo $searchapp?>')">
                                                  결제
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownPayment">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=결제">결제</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=충전">충전</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=구매">구매</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=현질">현질</a>
                                                    <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=환불">환불</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category3.php?varapp=<?echo $searchapp?>')">
                                                  계정
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=계정">계정</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=아이디">아이디</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=연동">연동</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=로그인">로그인</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=가입">가입</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category4.php?varapp=<?echo $searchapp?>')">
                                                  서버
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=서버">서버</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=연결">연결</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=접속">접속</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=로딩">로딩</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=네트워크">네트워크</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category5.php?varapp=<?echo $searchapp?>')">
                                                  구성
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=구성">구성</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=이벤트">이벤트</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=퀘스트">퀘스트</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=스테이지">스테이지</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=난이도">난이도</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-pinky dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category6.php?varapp=<?echo $searchapp?>')">
                                                  연출
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=모션">모션</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=배경">배경</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=그래픽">그래픽</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=소리">소리</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=디자인">디자인</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category7.php?varapp=<?echo $searchapp?>')">
                                                  캐릭터
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=캐릭터">캐릭터</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=스킬">스킬</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=아이템">아이템</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=영웅">영웅</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=스킨">스킨</a>
                                                </span>
                                            </span>

                                            <span class="dropdown mb-4">
                                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="changeIframeUrl('./sub-category8.php?varapp=<?echo $searchapp?>')">
                                                  시스템
                                                </button>
                                                <span class="dropdown-menu animated--fade-in" aria-labelledby="dropdownAccount">
                                                    <a class="dropdown-item" href="#">[ 전체 보기 ]</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=용량">용량</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=다운">다운</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=실행">실행</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=버그">버그</a>
                                                  <a class="dropdown-item" href="tables.php?vargame=<? echo $searchapp?>&varname=업데이트">업데이트</a>
                                                </span>
                                            </span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <div class="mainpage">
                                    <iframe src="" width="100%" height="100%" frameborder="0" border="0" scrolling="yes" bgcolor="#EEEEEE" bord="bord" ercolor="#FF000000" marginwidth="0" marginheight="0" name="main_frame" id="main_frame"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">개발 정보</h6>
                            </div>
                            <div class="card-body">
                                <p><br><br>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to
                                    reduce CSS bloat and poor page performance. Custom CSS classes are used to
                                    create custom components and custom utility classes.</p>
                                <p class="mb-0">Before working with this theme, you should become familiar with
                                    the Bootstrap framework, especially the utility classes.</p>
                            </div>
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
                <a class="btn btn-primary" href="login.php">확인</a>
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


</body>

</html>
