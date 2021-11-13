<?php include ('librarian_session.php') ?>



<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard | Library Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- educate icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
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

    <body>
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- Start Left menu area -->
        <?php include('./librariansidebar.php') ?>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="librariandashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./librarianheader.php') ?>
            <div class="analytics-sparkle-area">
                <div class="container-fluid">
                    <div class="breadcome-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcome-list">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="breadcome-heading">

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <ul class="breadcome-menu">
                                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                    </li>
                                                    <li><span class="bread-blod">View Profile</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-pro-review-area mt-t-30 mg-b-15">


                <div class="product-sales-area mg-tb-30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-payment-inner-st">
                                    <ul id="myTabedu1" class="tab-review-design">
                                        <li class="active"><a href="#description">Librarian Profile</a></li>
                                        <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                            <li><a href="#INFORMATION">Social Information</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="analytics-sparkle-area">
                                <div class="container-fluid">

                                    <br><!-- comment -->

                                    <br>                            <div class="row">

                                        <?php
                                        $db_host = 'localhost'; // Server Name
                                        $db_user = 'root'; // Username
                                        $db_pass = ''; // Password
                                        $db_name = 'lms'; // Database Name
                                        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                                        if (!$conn) {
                                            die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                        }
                                        $sql = "SELECT * FROM librarian where LibrarianID='$_SESSION[Librarian_ID]'";
                                        $query = mysqli_query($conn, $sql);
                                        if (!$query) {
                                            die('SQL Error: ' . mysqli_error($conn));
                                        }
                                        ?>

                                        <div class="col-lg-10 col-md-4 col-sm-4 col-xs-12">
                                            <div class="profile-info-inner">
                                                <?php
                                                while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <div class="profile-details-hr">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                <div class="address-hr">
                                                                    <p><b>Librarian ID</b><br /> <?php echo $row['LibrarianID'] ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                <div class="address-hr">
                                                                    <p><b>Name</b><br /> <?php echo $row['Name'] ?></p>
                                                                </div>
                                                            </div>

                                                            
                                                            


                                                        </div>
                                                        <div class="row">
                                                           
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                          <div class="address-hr tb-sm-res-d-n dps-tb-ntn">

                                                                    <p><b>Email ID</b><br /><?php echo $row['EmailID'] ?></p>
                                                                </div>
                                                            </div>
                                                             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                    <p><b>Phone</b><br /> <?php echo $row['Phone'] ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                    <p><b>Username</b><br /> <?php echo $row['Username'] ?></p>
                                                               
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                    <p><b>Password</b><br /> <?php echo $row['Password'] ?></p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                           <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <button class="btn btn-primary " name="btnupdatelibrarian" ><a href="updatelibrarian.php?lid=<?php echo $row['LibrarianID'];?>" style="color:white">Edit Details</a></button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
                <!-- counterup JS
                            ============================================ -->
                <script src="js/counterup/jquery.counterup.min.js"></script>
                <script src="js/counterup/waypoints.min.js"></script>
                <script src="js/counterup/counterup-active.js"></script>
                <!-- mCustomScrollbar JS
                            ============================================ -->
                <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
                <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
                <!-- metisMenu JS
                            ============================================ -->
                <script src="js/metisMenu/metisMenu.min.js"></script>
                <script src="js/metisMenu/metisMenu-active.js"></script>
                <!-- morrisjs JS
                            ============================================ -->
                <script src="js/morrisjs/raphael-min.js"></script>
                <script src="js/morrisjs/morris.js"></script>
                <script src="js/morrisjs/home3-active.js"></script>
                <!-- morrisjs JS
                            ============================================ -->
                <script src="js/sparkline/jquery.sparkline.min.js"></script>
                <script src="js/sparkline/jquery.charts-sparkline.js"></script>
                <script src="js/sparkline/sparkline-active.js"></script>
                <!-- calendar JS
                            ============================================ -->
                <script src="js/calendar/moment.min.js"></script>
                <script src="js/calendar/fullcalendar.min.js"></script>
                <script src="js/calendar/fullcalendar-active.js"></script>
                <!-- plugins JS
                            ============================================ -->
                <script src="js/plugins.js"></script>
                <!-- main JS
                            ============================================ -->
                <script src="js/main.js"></script>

                </body>

                </html>