<?
$conn= mysqli_connect('localhost','root','0000','capstone','3306');

         session_start();
         $id=$_GET['id'];
         $pw=$_GET['pwd'];


         $query = "SELECT m_id, m_pwd from member where m_id= '$id'" ;
         $result = $conn->query($query);

         if(mysqli_num_rows($result)==1) {

                 $row=mysqli_fetch_assoc($result);

                 if($row['m_pwd']==$pw){
                         $_SESSION['userid']=$id;
                         if(isset($_SESSION['userid'])){
                         ?>      <script>
                                         alert("로그인 되었습니다.");
                                         location.replace("main.php");
                                 </script>
 <?php
                         }
                         else{
                                 echo "session fail";
                         }
                 }

                 else {
         ?>              <script>
                                 alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                 history.back();
                         </script>
         <?php
                 }
         }

                 else{
 ?>              <script>
                         alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                         history.back();
                 </script>
 <?php
         }

 ?>
