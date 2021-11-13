<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $memusername = mysqli_real_escape_string($con, $_POST['txtmemusername']);
    $mempassword = mysqli_escape_string($con, $_POST['txtmempassword']);
    $memsql = "SELECT * FROM `member` WHERE UserName='$memusername' and Password='$mempassword'";
    $memresult= mysqli_query($con, $memsql);
    $memrow = mysqli_fetch_array($memresult, MYSQLI_ASSOC );
    $musername= isset($memrow['UserName']);
    $mpassword= isset($memrow['Password']);
    if($musername==$memusername){
        $_SESSION['login_member'] = $memusername;
        header("location: memberdashboard.php");
        
    }
 else {
        echo"<script>
            alert('Invalid Member Username/Member Password!');
            window.location.href='./memberlogin.php';
            </script>";
    }
}