<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$update_bookid = "";
$update_bookname = "";
$update_isbnno = "";
$update_author = "";
$update_edition = "";
$update_pid = "";
$update_price = "";
$update_category = "";
$update_booksavailable = "";
$query = "SELECT * FROM books where BookID=$_GET[bn]";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $update_bookid = $row['BookID'];
    $update_bookname = $row['BookTitle'];
    $update_isbnno = $row['ISBNNo'];
    $update_author = $row['Author'];
    $update_edition = $row['Edition'];
    $update_pid = $row['PID'];
    $update_price = $row['Price'];
    $update_category = $row['Category'];
    $update_booksavailable = $row['BooksAvailable'];
}
?>


<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Update Book | Library Management System</title>
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
                                            <li><span class="bread-blod">Update Book</span>
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
                                    <li class="active"><a href="#description">Update Book Information</a></li>
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
                                                                    <div class="form-group">
                                                                        <label>Book ID</label>
                                                                        <input name="txtupdatebookid" type="text" class="form-control" placeholder="Book ID" value="<?php echo $update_bookid; ?>" readonly>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label>Book Title</label>
                                                                        <input name="txtupdatebooktitle" type="text" class="form-control" placeholder="Book Title" value="<?php echo $update_bookname; ?>">
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label>ISBN No</label>
                                                                        <input name="txtupdateISBNNo" type="text" class="form-control" placeholder="ISBN No" value="<?php echo $update_isbnno; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Author</label>
                                                                        <input name="txtupdateauthor" type="text" class="form-control" placeholder="Author" value="<?php echo $update_author; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Books Available</label>
                                                                        <input name="txtupdatebooksavailable" type="text" class="form-control" placeholder="Books Available" value="<?php echo $update_booksavailable; ?>">
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>PID</label>
                                                                        <input name="txtupdatePID" type="text" class="form-control" placeholder="PID" value="<?php echo $update_pid; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Edition</label>
                                                                        <input name="txtupdateedition" type="text" class="form-control" placeholder="Edition" value="<?php echo $update_edition; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input name="txtupdateprice" type="text" class="form-control" placeholder="Price" value="<?php echo $update_price; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Category</label>
                                                                        <input name="txtupdatecategory" type="text" class="form-control" placeholder="Category" value="<?php echo $update_category; ?>">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <!--                                                                        <button class="btn btn-primary" name="updatebook">Update Book</button>-->
                                                                        <button class="btn btn-primary" name="update">Update Book</button>

<!--                                                                        <input type="Submit" value="Update Book Details" class="btn btn-primary waves-effect waves-light" name="update">-->
                                                                        <input type="Reset" value="Reset" class="btn btn-primary waves-effect waves-light">

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
            <!--            <div class="footer-copyright-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="footer-copy-right">
                                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
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
$db = mysqli_connect("localhost", "root", "", "lms");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['bn']; // get id through query string
if (isset($_POST['update'])) { // when click on Update button
    $u_bookid = filter_input(INPUT_POST, 'txtupdatebookid');
    $u_booktitle = filter_input(INPUT_POST, 'txtupdatebooktitle');
    $u_isbnno = filter_input(INPUT_POST, 'txtupdateISBNNo');
    $u_author = filter_input(INPUT_POST, 'txtupdateauthor');
    $u_pid = filter_input(INPUT_POST, 'txtupdatePID');
    $u_edition = filter_input(INPUT_POST, 'txtupdateedition');
    $u_price = filter_input(INPUT_POST, 'txtupdateprice');
    $u_category = filter_input(INPUT_POST, 'txtupdatecategory');
    $u_booksavailable = filter_input(INPUT_POST, 'txtupdatebooksavailable');
    $edit = mysqli_query($db, "UPDATE `books` SET `BookTitle`='$u_booktitle',`ISBNNo`='$u_isbnno',`Author`='$u_author',`Edition`='$u_edition',`Price`='$u_price',`Category`='$u_category',`BooksAvailable`='$u_booksavailable' WHERE BookID='$id'");
    if ($edit) {
        mysqli_close($db); // Close connection
        echo "<meta http-equiv='refresh' content='0;url=viewbooks.php'>";  
      //  header("Location: ./viewbooks.php"); // redirects to view books page
        exit;
    } else {
        echo mysqli_error();
    }
}
?>

