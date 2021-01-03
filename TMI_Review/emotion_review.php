<?
$var_value = $_GET['varname'];
$searchapp = $_GET['varapp'];
$emotion = $_GET['varemo'];

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
}else if($var_value=='기타'){
  $hi_var_value = '기타';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TMI REVIEW - Emotion Details</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><? echo $emotion?>리뷰 자세히 보기
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
                /* Load DB */
                $conn = mysqli_connect('localhost', 'root', '0000', 'capstone');
                if ( !$conn ) die('DB Error');

                /* Set to UTF-8 Encoding */
                mysqli_query($conn, 'set session character_set_connection=utf8;');
                mysqli_query($conn, 'set session character_set_results=utf8;');
                mysqli_query($conn, 'set session character_set_client=utf8;');

                if($var_value=='기타'){
                  $query = "SELECT * FROM $searchapp where category1 = '$var_value' order by writer desc";
                }else{
                $query = "SELECT * FROM $searchapp where (category1 = '$var_value' or category2 = '$var_value' or category3 = '$var_value') AND emotion = '$emotion'  order by writer desc";
                }
                $result = mysqli_query($conn, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Writer</th>
                      <th>Reviews</th>
                      <th>Emotions</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php
                  if( $result ){

                  while($row = mysqli_fetch_assoc($result)){

                     print "<tr>";
                        print "<th>$row[writer]</th>";
                        print "<th>$row[content]</th>";
                        print "<th>$row[emotion]</th>";


                      print "</tr>";
                 }
               }
               if (!$result) {
          printf("Error: %s\n", mysqli_error($conn));
          exit();
          }




                 mysqli_close($conn);
                 ?>



                </tbody>
                </table>
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
            <span>Copyright &copy; Your Website 2019</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
