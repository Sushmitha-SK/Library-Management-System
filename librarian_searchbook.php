<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>View Books | Library Management System</title>
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
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">View Books</span>
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
                                    <li class="active"><a href="#description">Book Information</a></li>
                                    <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                        <li><a href="#INFORMATION">Social Information</a></li>-->
                                </ul>
                                <div class="add-product">
                                    <a href="addbook.php">Add Book</a>
                                </div>
                                <?php
                                $db_host = 'localhost'; // Server Name
                                $db_user = 'root'; // Username
                                $db_pass = ''; // Password
                                $db_name = 'lms'; // Database Name
                                $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                                $search = $_REQUEST["search"];
                               // $search=filter_input(INPUT_POST($_REQUEST["search"]));

                                //$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
                                $query = "SELECT `BookID`, `BookTitle`, `ISBNNo`, `Author`, `PID`, `Edition`, `Price`, `Category`, `BooksAvailable` FROM `books` WHERE BookTitle like '%$search%'";
                                $result = mysqli_query($conn, $query);

                                if (mysqli_num_rows($result) > 0)
                                    if (mysqli_num_rows($result) > 0) {
                                        ?>
                                        <div id="toolbar">
                                            <form action = "" method="get" class="add-professors" style="width: 500px;">
                                                <br>
                                                <div class="form-group">

                                                    Enter the title of the book to be searched :
                                                    <input type="text" name="search" class="search-int form-control"><br><!-- comment -->
                                                </div><!-- comment -->
                                                <input type="submit" value="Search" name="submit"  class="btn btn-primary waves-effect waves-light">
                                                <input type="reset" value="Reset" name="Reset" class="btn btn-primary waves-effect waves-light">

                                                <br>
                                            </form>   
                                        </div>

                                        <div class="product-status mg-b-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap drp-lst">
                                                            <h4>Book List</h4>

                                                            <div class="asset-inner">

                                                                <table>

                                                                    <tr>
                                                                        <th> BookID </th>
                                                                        <th> BookTitle </th>
                                                                        <th> ISBNNo </th>
                                                                        <th> Author </th>
                                                                        <th> PID </th>
                                                                        <th>Edition</th>
                                                                        <th>Price</th>
                                                                        <th>Category</th>
                                                                        <th>Books Available</th>
                                                                    </tr>
                                                                    <?php
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row["BookID"]; ?> </td>
                                                                            <td><?php echo $row["BookTitle"]; ?> </td>
                                                                            <td><?php echo $row["ISBNNo"]; ?> </td>
                                                                            <td><?php echo $row["Author"]; ?> </td>
                                                                            <td><?php echo $row["PID"]; ?> </td>
                                                                            <td><?php echo $row['Edition'] ?></td>
                                                                            <td><?php echo $row['Price'] ?></td>
                                                                            <td><?php echo $row['Category'] ?></td>
                                                                            <td><?php echo $row['BooksAvailable'] ?></td>
                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                } else
                                                                    echo "<center>No books found in the library by the name $search </center>";
                                                            ?>
                                                        </table>
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

                            <script src="js/jquery.dataTables.min.js"></script>
                            <script src="js/jquery.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('#bookTable').DataTable();
                                });
                            </script>
                            </body>

                            </html>
