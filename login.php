<?php
include("./configuration.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($db, $_POST['txtusername']);
    $mypassword = mysqli_real_escape_string($db, $_POST['txtpassword']);
    $myusertyp = mysqli_real_escape_string($db, $_POST['txtusertype']);
    $sql = "SELECT * FROM `librarylogin` WHERE Username='$myusername' AND Password='$mypassword' AND UserType='$myusertyp'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $usertyp = $row['UserType'];
    if($usertyp == 'Librarian') {
        $_SESSION['login_user'] = $myusername;
        header("location: librariandashboard.php");
    } else if ($usertyp == 'Member') {
        $_SESSION['login_user'] = $myusername;
        header("location: memberdashboard.php");
    } else {
        echo"<script>
        alert('Invalid Username/Password!');
        window.location.href='./login.php';
        </script>";
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | Library Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
<!--        <link rel="stylesheet" href="css/owl.theme.css">-->
<!--        <link rel="stylesheet" href="css/owl.transitions.css">-->
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- morrisjs CSS
                    ============================================ -->
<!--        <link rel="stylesheet" href="css/morrisjs/morris.css">-->
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- forms CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- style CSS
                    ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body style="background:url(img/librarybck.jpg); width:100%; height:100%; border-radius: 8px;">
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <div class="error-pagewrap">
            <div class="error-page-int">
                <img src="assets/LMSlogo_edited.jpg" width="500" height="200"/>
                <br>
                <br>         
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body" style="border-radius: 15px;">
                            <form id="loginForm" method="post" action="" >
                                <div class="form-group">
                                    <label class="control-label" for="username">Username</label>
                                    <input type="text" placeholder="Username" title="Please enter you username" autofocus required="" name="txtusername" id="username" class="form-control">
                                    <span class="help-block small">Your unique username to app</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" name="txtpassword" id="password" class="form-control">
                                    <span class="help-block small">Your strong password</span>
                                </div>
                                <div class="form-group"><!-- comment -->
                                    <label class="control-label">Login As</label>
                                    <select name="txtusertype" class="form-control">
                                        <option>--Select--</option>
                                        <option value="Librarian">Librarian</option>
                                        <option value="Member">Member</option>
                                    </select>
                                </div>
                                <div class="form-group" style="text-align: right"><!-- comment -->
                                    <input class="btn btn-success login-submit-cs" type="submit" value="Login" name="login" id="but_submit" />
                                    <input class="btn btn-success login-submit-cs" type="reset" value="Reset" name="btn_reset" id="btn_reset"/>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>   
        </div>
        <!-- jquery
                    ============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
                    ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
                    ============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
                    ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
                    ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
                    ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
                    ============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
                    ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
                    ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
                    ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- tab JS
                    ============================================ -->
        <script src="js/tab.js"></script>
        <!-- icheck JS
                    ============================================ -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/icheck/icheck-active.js"></script>
        <!-- plugins JS
                    ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
                    ============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
                    ============================================ -->
    </body>

</html>

