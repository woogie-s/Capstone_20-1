<script>
<?php
        session_start();
        $result = session_destroy();

        if($result) {
?>
                alert("로그아웃 되었습니다.");
                history.go(0);
<?php   }
?>
location.replace("login_page.php");
</script>
