<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$update_publisherid="";
$update_pname = "";
$update_paddress = "";
$update_pcontactno = "";
$update_pemail = "";

$query = "SELECT * FROM publisher where PID=$_GET[up]";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
$update_publisherid=$row['PID'];
$update_pname = $row['PName'];
$update_paddress =$row['PAddress'];
$update_pcontactno =$row['PContactNo'];
$update_pemail = $row['PEmail'];
}
?>


<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>New Publisher | Library Management System</title>
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
        <!-- forms CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- educate icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- dropzone CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="//geodata.solutions/includes/countrystatecity.js"></script>

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
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!--                                            <form role="search" class="sr-input-func">
                                                                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                                                                            <a href="#"><i class="fa fa-search"></i></a>
                                                                                        </form>-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Update Publisher</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Update Publisher Information</a></li>
                                    <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                        <li><a href="#INFORMATION">Social Information</a></li>-->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad">
                                                        <form method="post" action="">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <!--                                                                    <div class="form-group">
                                                                                                                                            <label>Book ID</label>
                                                                                                                                            <input name="txtbookid" type="text" class="form-control" placeholder="Book ID">
                                                                                                                                        </div>-->
                                                                    <div class="form-group">
                                                                        <label>Publisher Name</label>
                                                                        <input name="updatetxtpublisherid" type="text" class="form-control" placeholder="Publisher ID" value="<?php echo $update_publisherid; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Publisher Name</label>
                                                                        <input name="updatetxtpublishername" type="text" class="form-control" placeholder="Publisher Name" value="<?php echo $update_pname; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input name="updatetxtpaddress" type="text" class="form-control" placeholder="Address" value="<?php echo $update_paddress; ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Contact No</label>
                                                                        <input name="updatetxtpcontactno" type="text" class="form-control" placeholder="Contact No" value="<?php echo $update_pcontactno; ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Email ID</label>
                                                                        <input name="updatetxtpemailid" type="text" class="form-control" placeholder="Email ID" value="<?php echo $update_pemail; ?>">
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <button class="btn btn-primary" name="updatepublisher">Update Publisher</button>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './footer.php' ?>
         
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
        <!-- morrisjs JS
                    ============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <!-- calendar JS
                    ============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- maskedinput JS
                    ============================================ -->
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/masking-active.js"></script>
        <!-- datepicker JS
                    ============================================ -->
        <script src="js/datepicker/jquery-ui.min.js"></script>
        <script src="js/datepicker/datepicker-active.js"></script>
        <!-- form validate JS
                    ============================================ -->
        <script src="js/form-validation/jquery.form.min.js"></script>
        <script src="js/form-validation/jquery.validate.min.js"></script>
        <script src="js/form-validation/form-active.js"></script>
        <!-- dropzone JS
                    ============================================ -->
        <script src="js/dropzone/dropzone.js"></script>
        <!-- tab JS
                    ============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
                    ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
                    ============================================ -->
        <script src="js/main.js"></script>
     
    </body>

</html>



<?php
$db_publisher = mysqli_connect("localhost", "root", "", "lms");
if (!$db_publisher) {
    die("Connection failed: " . mysqli_connect_error());
}
$pu_id = $_GET['up']; // get id through query string
if (isset($_POST['updatepublisher'])) { // when click on Update button
    $u_pubid=filter_input(INPUT_POST,'updatetxtpublisherid');
    $u_pubname = filter_input(INPUT_POST, 'updatetxtpublishername');
    $u_pubaddress = filter_input(INPUT_POST, 'updatetxtpaddress');
    $u_pubemail = filter_input(INPUT_POST, 'updatetxtpemailid');
    $u_pubcontactno=filter_input(INPUT_POST,'updatetxtpcontactno');
    $editpublisher=mysqli_query($db_publisher,"UPDATE `publisher` SET `PName`='$u_pubname',`PAddress`='$u_pubaddress',`PContactNo`='$u_pubcontactno',`PEmail`='$u_pubemail' WHERE PID='$pu_id'");
    if ($editpublisher) {
        mysqli_close($db_publisher); // Close connection
        echo "<meta http-equiv='refresh' content='0;url=viewpublishers.php'>";  
      //  header("Location: ./viewbooks.php"); // redirects to view books page
        exit;
    } else {
        echo mysqli_error();
    }
}
?>