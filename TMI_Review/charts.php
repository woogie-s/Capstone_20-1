
<?
$conn= mysqli_connect('localhost','root','0000','capstone','3306');

$searchapp = $_GET['varapp'];
$var_value = $_GET['varname'];
$var_emo = $_GET['varemo'];


//관심앱
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


///으아아아아아아아
$sql = "SELECT count(distinct date) FROM $searchapp";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$all_date_data = $row['count(distinct date)'];
$all_date_data = round($all_date_data/6);

//감정 없을때 == 감정 전체
if($var_emo==null||$var_emo=='전체'){
  if($var_value==null||$var_value=='전체'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_count1 = 0;
    $date_icount1 = -1;
    for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count1 += $date_data;
}

$date_count2 = 0;
for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count2 += $date_data;
}

$date_count3 = 0;
for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count3 += $date_data;
}

$date_count4 = 0;
for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count4 += $date_data;
}

$date_count5 = 0;
for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count5 += $date_data;
}

$date_count6 = 0;
for($i=0;$i<$all_date_data;$i++){
  $row = mysqli_fetch_array($result1);
  $im_date = $row['date'];

  $sql = "SELECT count(writer) FROM $searchapp WHERE date = '$im_date'";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  $date_data = $row2['count(writer)'];

  $date_count6 += $date_data;
}
}else if($var_value!=null){
  if($var_value=='광고'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
  }

  $date_icount2 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount2 += $date_data;
  }

  $date_icount3 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount3 += $date_data;
  }

  $date_icount4 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount4 += $date_data;
  }

  $date_icount5 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount5 += $date_data;
  }

  $date_icount6 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount6 += $date_data;
  }//결제
}else if($var_value=='계정'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
            or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
            or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='결제'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
            or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
            or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='서버'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
            or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
            or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='구성'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
            or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
            or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='연출'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
            or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
            or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='캐릭터'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
            or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
            or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}else if($var_value=='시스템'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_icount1 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
            or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
            or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_icount1 += $date_data;
    }
    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
  }
}//감정 들어왔을때
}
}else if($var_emo=='긍정'){
  if($var_value==null||$var_value=='전체'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_count1 = 0;
  $date_icount1 = -1;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count1 += $date_data;
  }

  $date_count2 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count2 += $date_data;
  }

  $date_count3 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count3 += $date_data;
  }

  $date_count4 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count4 += $date_data;
  }

  $date_count5 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count5 += $date_data;
  }

  $date_count6 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '긍정' OR emotion ='약한 긍정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count6 += $date_data;
  }
  }else if($var_value!=null){
    if($var_value=='광고'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
    }

    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
    }//결제
  }else if($var_value=='계정'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='결제'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='서버'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='구성'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='연출'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='캐릭터'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='시스템'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '긍정' OR emotion ='약한 긍정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }
}//////////////////////////////////////////////부정감정
}else if($var_emo=='부정'){
  if($var_value==null||$var_value=='전체'){
  $sql = "SELECT distinct date FROM $searchapp";
  $result1 = mysqli_query($conn, $sql);

  $date_count1 = 0;
  $date_icount1 = -1;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count1 += $date_data;
  }

  $date_count2 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count2 += $date_data;
  }

  $date_count3 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count3 += $date_data;
  }

  $date_count4 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count4 += $date_data;
  }

  $date_count5 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count5 += $date_data;
  }

  $date_count6 = 0;
  for($i=0;$i<$all_date_data;$i++){
    $row = mysqli_fetch_array($result1);
    $im_date = $row['date'];

    $sql = "SELECT count(writer) FROM $searchapp WHERE (emotion = '부정' OR emotion ='약한 부정') AND  date = '$im_date'";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_array($result);
    $date_data = $row2['count(writer)'];

    $date_count6 += $date_data;
  }
  }else if($var_value!=null){
    if($var_value=='광고'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
    }

    $date_icount2 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount2 += $date_data;
    }

    $date_icount3 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount3 += $date_data;
    }

    $date_icount4 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount4 += $date_data;
    }

    $date_icount5 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount5 += $date_data;
    }

    $date_icount6 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '$var_value' OR category2 = '$var_value' OR category3= '$var_value') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount6 += $date_data;
    }//결제
  }else if($var_value=='계정'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
              or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
              or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '계정' or category1 = '아이디' or category1 = '연동' or category1 = '로그인' or category1 = '가입'
                or category2 = '계정' or category2 = '아이디' or category2 = '연동' or category2 = '로그인' or category2 = '가입'
                or category3 = '계정' or category3 = '아이디' or category3 = '연동' or category3 = '로그인' or category3 = '가입') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='결제'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
              or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
              or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '결제' or category1 = '충전' or category1= '구매' or category1 = '현질' or category1 = '환불'
                or category2 = '결제' or category2 = '충전' or category2= '구매' or category2 = '현질' or category2 = '환불'
                or category3 = '결제' or category3 = '충전' or category3= '구매' or category3 = '현질' or category3 = '환불') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='서버'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
              or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
              or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '서버' or category1 = '연결' or category1 = '접속' or category1 = '로딩' or category1 = '네트워크'
                or category2 = '서버' or category2 = '연결' or category2 = '접속' or category2 = '로딩' or category2 = '네트워크'
                or category3 = '서버' or category3 = '연결' or category3 = '접속' or category3 = '로딩' or category3 = '네트워크') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='구성'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
              or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
              or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '구성' or category1 = '이벤트' or category1 = '퀘스트' or category1 = '스테이지' or category1 = '난이도'
                or category2 = '구성' or category2 = '이벤트' or category2 = '퀘스트' or category2 = '스테이지' or category2 = '난이도'
                or category3 = '구성' or category3 = '이벤트' or category3 = '퀘스트' or category3 = '스테이지' or category3 = '난이도') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='연출'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
              or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
              or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '모션' or category1 = '배경' or category1 = '그래픽' or category1 = '소리' or category1 = '디자인'
                or category2 = '모션' or category2 = '배경' or category2 = '그래픽' or category2 = '소리' or category2 = '디자인'
                or category3 = '모션' or category3 = '배경' or category3 = '그래픽' or category3 = '소리' or category3 = '디자인') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='캐릭터'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
              or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
              or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '캐릭터' or category1 = '스킬' or category1 = '영웅' or category1 = '아이템' or category1 = '스킨'
                or category2 = '캐릭터' or category2 = '스킬' or category2 = '영웅' or category2 = '아이템' or category2 = '스킨'
                or category3 = '캐릭터' or category3 = '스킬' or category3 = '영웅' or category3 = '아이템' or category3 = '스킨') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }else if($var_value=='시스템'){
    $sql = "SELECT distinct date FROM $searchapp";
    $result1 = mysqli_query($conn, $sql);

    $date_icount1 = 0;
    for($i=0;$i<$all_date_data;$i++){
      $row = mysqli_fetch_array($result1);
      $im_date = $row['date'];

      $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
              or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
              or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
      $result = mysqli_query($conn, $sql);
      $row2 = mysqli_fetch_array($result);
      $date_data = $row2['count(writer)'];

      $date_icount1 += $date_data;
      }
      $date_icount2 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount2 += $date_data;
      }

      $date_icount3 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount3 += $date_data;
      }

      $date_icount4 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount4 += $date_data;
      }

      $date_icount5 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount5 += $date_data;
      }

      $date_icount6 = 0;
      for($i=0;$i<$all_date_data;$i++){
        $row = mysqli_fetch_array($result1);
        $im_date = $row['date'];

        $sql = "SELECT count(writer) FROM $searchapp WHERE (category1 = '업데이트' or category1 = '용량' or category1 = '다운' or category1 = '버그' or category1 = '설치'
                or category2 = '업데이트' or category2 = '용량' or category2 = '다운' or category2 = '버그' or category2 = '설치'
                or category3 = '업데이트' or category3 = '용량' or category3 = '다운' or category3 = '버그' or category3 = '설치') AND (emotion = '부정' OR emotion ='약한 부정') AND date = '$im_date'";
        $result = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_array($result);
        $date_data = $row2['count(writer)'];

        $date_icount6 += $date_data;
    }
  }
}
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

  <title>TMI REVIEW</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <script>
  var date = "<? echo $all_date_data;?>";
  var test = "<? echo $date_icount1;?>"

  if(test==-1){
  var sub_date1 =  "<? echo $date_count1;?>";
  var sub_date2 =  "<? echo $date_count2;?>";
  var sub_date3 =  "<? echo $date_count3;?>";
  var sub_date4 =  "<? echo $date_count4;?>";
  var sub_date5 =  "<? echo $date_count5;?>";
  var sub_date6 =  "<? echo $date_count6;?>";
}else if(test!=-1){
  var sub_date1 =  "<? echo $date_icount1;?>";
  var sub_date2 =  "<? echo $date_icount2;?>";
  var sub_date3 =  "<? echo $date_icount3;?>";
  var sub_date4 =  "<? echo $date_icount4;?>";
  var sub_date5 =  "<? echo $date_icount5;?>";
  var sub_date6 =  "<? echo $date_icount6;?>";
}

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
          <p class="mb-4">리뷰 분석 결과를 시각화하여 항목별 차트를 눈으로 쉽게 볼 수 있다.</p>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-4 col-lg-5">
              <br><br><br>
              <div class="card-body" style="text-align:center;">
                <button class="btn btn-primary" type="button" onclick="location.href='charts.php?varapp=<?echo $myapp1?>'">First APP</button>
                <button class="btn btn-primary" type="button" onclick="location.href='charts.php?varapp=<?echo $myapp2?>'">Second APP</button>
                <button class="btn btn-primary" type="button" onclick="location.href='charts.php?varapp=<?echo $myapp3?>'">Third APP</button>

              </div>

              <div style="text-align:center;">
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=전체'">전체</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=광고'">광고</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=결제'">결제</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=계정'">계정</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=서버'">서버</button><br><br>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=구성'">구성</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=연출'">연출</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=캐릭터'">캐릭터</button>
              <button class="btn btn-info" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=시스템'">시스템</button>
              </div>

              <div style="text-align:center;">
                <br>
                <button class="btn btn-warning" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=<?echo $var_value?>&varemo=전체'">전체</button>
                <button class="btn btn-warning" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=<?echo $var_value?>&varemo=긍정'">긍정</button>
                <button class="btn btn-warning" type="button" onclick="location.href='charts.php?varapp=<?echo $searchapp?>&varname=<?echo $var_value?>&varemo=부정'">부정</button>

                </div>

              <div style="text-align:center;">
              <br><br>

              <br><br>

              </div>

            </div>



            <div class="col-xl-7 col-lg-5">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?
                  if($var_emo==null||$var_emo=='전체'){
                  if($_GET['varname']==null||$_GET['varname']=='전체'){
                  echo "전체 카테고리";
                  }
                  else{
                  echo $var_value;
                  }
                }else if($var_emo=='긍정'){
                  if($_GET['varname']==null||$_GET['varname']=='전체'){
                  echo "전체 카테고리 : 긍정";
                  }
                  else{
                  echo $var_value." : 긍정";
                  }
                }else if($var_emo=='부정'){
                  if($_GET['varname']==null||$_GET['varname']=='전체'){
                  echo "전체 카테고리 : 부정";
                  }
                  else{
                  echo $var_value." : 부정";
                  }
                }
                  ?></h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                  업데이트 일시 :
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
