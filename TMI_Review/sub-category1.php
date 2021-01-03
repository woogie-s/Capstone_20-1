<?php
$searchapp =$_GET['varapp'];

$conn= mysqli_connect('localhost','root','0000','capstone','3306');

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '광고' or category2 = '광고' or category3= '광고'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$all_count = $row['count(writer)'];

$sql = "SELECT count(writer) FROM $searchapp WHERE category1 = '광고' or category2 = '광고' or category3 = '광고'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$g_d0 = $row['count(writer)'];

?>


<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

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
    <body>
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">[광고] 하위 카테고리</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">광고
                    <span class="float-right"><?=round($g_d0/$all_count*100)?>%</span></h4>
                <div class="progress mb-4">
                    <div
                        class="progress-bar bg-danger"
                        role="progressbar"
                        style="width: <?=$g_d0/$all_count*100?>%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>

                </div>
            </div>
        </div>
    </body>
</html>
