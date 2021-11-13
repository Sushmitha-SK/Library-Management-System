
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
                    <?php if (isset($_SESSION['LibrarianName'])) : ?> 
                        <p style="text-align: right; font-family: Times New Roman; font-size: 14px; font-weight: bold; ">Logged In as : <?php echo $_SESSION['LibrarianName']; ?> </p>             
                    <?php endif ?> 

                </div>
            </div>
            <div class="product-sales-area mg-tb-30">
                <div class="container-fluid">
                    <div class="analytics-sparkle-area">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="analytics-sparkle-line reso-mg-b-30" style="border-radius: 10px;">
                                        <div class="analytics-content">
                                            <h5>Total Books</h5>

                                            <h2><span class="counter">
                                                    <?php
                                                    $db_host1 = 'localhost'; // Server Name
                                                    $db_user1 = 'root'; // Username
                                                    $db_pass1 = ''; // Password
                                                    $db_name1 = 'lms'; // Database Name
                                                    $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
                                                    if (!$conn1) {
                                                        die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                                    }
                                                    $sql_b = 'SELECT COUNT(*) as b FROM `books`';
                                                    $query_b = mysqli_query($conn1, $sql_b);
                                                    if (!$query_b) {
                                                        die('SQL Error: ' . mysqli_error($conn1));
                                                    }
                                                    while ($row_b = mysqli_fetch_array($query_b)) {

                                                        echo $row_b['b'];
                                                    }
                                                    ?>
                                                </span> <span class="tuition-fees">Books in House</span></h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="analytics-sparkle-line reso-mg-b-30" style="border-radius: 10px;">
                                        <div class="analytics-content">
                                            <h5>Issue Books</h5>
                                            <h2><span class="counter">
                                                    <?php
                                                    $db_host2 = 'localhost'; // Server Name
                                                    $db_user2 = 'root'; // Username
                                                    $db_pass2 = ''; // Password
                                                    $db_name2 = 'lms'; // Database Name
                                                    $conn2 = mysqli_connect($db_host2, $db_user2, $db_pass2, $db_name2);
                                                    if (!$conn2) {
                                                        die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                                    }
                                                    $sql_ib = 'SELECT count(*) as ib FROM issuebooks where Status="Approved"';
                                                    $query_ib = mysqli_query($conn1, $sql_ib);
                                                    if (!$query_ib) {
                                                        die('SQL Error: ' . mysqli_error($conn2));
                                                    }
                                                    while ($row_ib = mysqli_fetch_array($query_ib)) {

                                                        echo $row_ib['ib'];
                                                    }
                                                    ?>
                                                </span> 
                                                <span class="tuition-fees">Books Issued</span></h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30"  style="border-radius: 10px;">
                                        <div class="analytics-content">
                                            <h5>Return Books</h5>
                                            <h2><span class="counter">
                                                    <?php
                                                    $db_host3 = 'localhost'; // Server Name
                                                    $db_user3 = 'root'; // Username
                                                    $db_pass3 = ''; // Password
                                                    $db_name3 = 'lms'; // Database Name
                                                    $conn3 = mysqli_connect($db_host3, $db_user3, $db_pass3, $db_name3);
                                                    if (!$conn3) {
                                                        die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                                    }
                                                    $sql_rb = 'SELECT count(*) as rb FROM returnbooks';
                                                    $query_rb = mysqli_query($conn1, $sql_rb);
                                                    if (!$query_rb) {
                                                        die('SQL Error: ' . mysqli_error($conn3));
                                                    }
                                                    while ($row_rb = mysqli_fetch_array($query_rb)) {

                                                        echo $row_rb['rb'];
                                                    }
                                                    ?>
                                                </span> 
                                                <span class="tuition-fees">Books Returned</span></h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30" style="border-radius: 10px;">
                                        <div class="analytics-content">
                                            <h5>Members</h5>
                                            <h2><span class="counter">
                                                    <?php
                                                    $db_host4 = 'localhost'; // Server Name
                                                    $db_user4 = 'root'; // Username
                                                    $db_pass4 = ''; // Password
                                                    $db_name4 = 'lms'; // Database Name
                                                    $conn4 = mysqli_connect($db_host4, $db_user4, $db_pass4, $db_name4);
                                                    if (!$conn4) {
                                                        die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                                    }
                                                    $sql_members = 'SELECT count(*) as membercount FROM member';
                                                    $query_members = mysqli_query($conn4, $sql_members);
                                                    if (!$query_members) {
                                                        die('SQL Error: ' . mysqli_error($conn4));
                                                    }
                                                    while ($row_members = mysqli_fetch_array($query_members)) {

                                                        echo $row_members['membercount'];
                                                    }
                                                    ?>
                                                </span>
                                                <span class="tuition-fees">Total Members</span></h2>

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