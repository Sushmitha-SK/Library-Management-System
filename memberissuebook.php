<!Doctype html>
<?php include('session.php') ?>
<?php
// php code to search data in mysql database and set it in input text
if (isset($_POST['search'])) {
    $id = $_POST['id'];
    $connect = mysqli_connect("localhost", "root", "", "lms");
    $query = "SELECT `BookID`, `BookTitle`, `ISBNNo`, `Author`, `Edition`, `Price`, `BooksAvailable` FROM `books` WHERE  `BookID` = $id LIMIT 1";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $bid = $row['BookID'];
            $btitle = $row['BookTitle'];
            $b_isbnno = $row['ISBNNo'];
            $bauthor = $row['Author'];
            $bedition = $row['Edition'];
            $bprice = $row['Price'];
            $bavailable = $row['BooksAvailable'];
        }
    }

    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined Book ID";
        $bid = "";
        $btitle = "";
        $b_isbnno = "";
        $bauthor = "";
        $bedition = "";
        $bprice = "";
        $bavailable = "";
    }
    mysqli_free_result($result);
    mysqli_close($connect);
}

// in the first time inputs are empty
else {
//    $eid = "";
//    $fname = "";
//    $desg = "";
//    $dept = "";
}
?>

<!-- comment --><!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Issue Book | Library Management System</title>
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
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript">
            function GetDays() {
                var duedt = new Date(document.getElementById("duedatepicker").value);
                var issuedt = new Date(document.getElementById("issuedatepicker").value);
                return parseInt((duedt - issuedt) / (24 * 3600 * 1000));
            }
            
           

            function cal() {
                if (document.getElementById("duedatepicker").value) {
                    document.getElementById("getperiod").value = GetDays();
                }
            }
        </script>


        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- Start Left menu area -->
        <?php include('./membersidebar.php') ?>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="memberdashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./memberheader.php') ?>
            <?php if (isset($_SESSION['MemberFullName'])) : ?> 
                <p style="text-align: right; font-family: Times New Roman; font-size: 14px; font-weight: bold; ">Logged In as : <?php echo $_SESSION['MemberFullName']; ?> </p>             
            <?php endif ?> 
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
                                            <li><span class="bread-blod">Issue Book</span>
                                            </li>
                                        </ul>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Select Book</a></li>
                                    <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                        <li><a href="#INFORMATION">Social Information</a></li>-->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <form role="form" method="post" action="" class="sr-input-func">
                                                <div class="col-lg-6">
                                                    <div class="form-group res-mg-t-15" style="width:300px;">
                                                        <label>Select Book ID</label>
                                                        <?php
                                                        $db_book = mysqli_connect("localhost", "root", "", "lms");
                                                        $sql_query_book = mysqli_query($db_book, "select * from books");
                                                        $options_book = "";
                                                        while ($row_book = mysqli_fetch_array($sql_query_book)) {
                                                            $options_book = $options_book . "<option>$row_book[0]</option>";
                                                            $book_id = $row_book[0];
                                                        }
                                                        ?>
                                                        <select class="form-control" name="id" style="width:300px">
                                                            <option value="none" selected="" disabled="">----Select Book ID----</option>
                                                            <?php
                                                            echo $options_book;
                                                            ?>
                                                        </select>
                                                        <br><!-- comment -->
                                                        <br>
                                                        <input type="submit" name="search" value="Fetch Data" 
                                                               class="btn btn-success" 
                                                               style="width: 250px;border-radius: 10px;" id="fetchdetails">




<!--                                                <input type="text" name="id" class="form-control">  <br>        -->
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







            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area mt-t-30 mg-b-15" id="showformdetails">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Issue Book</a></li>
                                    <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                        <li><a href="#INFORMATION">Social Information</a></li>-->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad">
                                                        <form method="post" action="memberissuebook_code.php" class="add-professors" id="issuebookform" >
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Issue ID</label>
                                                                        <?php
                                                                        $db_host = 'localhost'; // Server Name
                                                                        $db_user = 'root'; // Username
                                                                        $db_pass = ''; // Password
                                                                        $db_name = 'lms'; // Database Name
                                                                        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                                                                        if (!$conn) {
                                                                            die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                                                        }
                                                                        $sql = 'SELECT IssueID FROM issuebooks ORDER BY IssueID DESC LIMIT 1';
                                                                        $query = mysqli_query($conn, $sql);
                                                                        if (!$query) {
                                                                            die('SQL Error: ' . mysqli_error($conn));
                                                                        }
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                            $issueidcount = $row['IssueID'] + 1;
                                                                        }
                                                                        ?>
                                                                        <input name="txtissueid" type="text" class="form-control" placeholder="Issue ID" readonly value="<?php echo $issueidcount ?>">


<!--                                                                        <input name="txtmemberid" type="text" class="form-control" placeholder="Member ID">-->
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="form-group res-mg-t-15">
                                                                            <label>Book ID</label>
                                                                            <input name="txtbookid" readonly type="text" class="form-control" placeholder="Book ID" value="<?php echo $bid ?>">
                                                                        </div>
                                                                    </div>




                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Book Author</label>
                                                                        <input name="txtbooktitle" type="text" readonly class="form-control" placeholder="Author" value="<?php echo $bauthor ?>">
                                                                    </div>

                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Edition</label>
                                                                        <input name="txtedition" readonly type="text" class="form-control" placeholder="Edition" value="<?php echo $bedition ?>">
                                                                    </div>
                                                                   
                                                                    <div class="form-group res-mg-t-15">
                                                                         <?php
                                                                         $currentdate=date('Y-m-d');
                                                                    ?>
                                                                        <label>Issue Date</label>
                                                                        <input name="txtissuedate" id="issuedatepicker" type="date" class="form-control" onchange="cal()" 
                                                                               value="<?php echo $currentdate;?>">

                                                                    </div>
                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Due Date</label>
                                                                        <?php
                                                                        $due_date= date('Y-m-d', strtotime($currentdate. ' + 15 days')); 

                                                                        ?>
                                                                        <input name="txtduedate" id="duedatepicker" 
                                                                               type="date" class="form-control" 
                                                                               placeholder="Due Date" onchange="cal()"
                                                                               value="<?php echo $due_date;?>">

                                                                    </div>




                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Member ID</label>
                                                                        <input name="txtmemberid" type="text" class="form-control" readonly placeholder="Member ID" value="<?php echo $_SESSION['Member_ID']; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-group res-mg-t-15">
                                                                            <label>Book Title</label>
                                                                            <input name="txtbooktitle" readonly type="text" class="form-control" placeholder="Book Title" value="<?php echo $btitle ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>ISBN No</label>
                                                                        <input name="txtisbnno" readonly type="text" class="form-control" placeholder="ISBN No" value="<?php echo $b_isbnno ?>">
                                                                    </div>
                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Price</label>
                                                                        <input name="txtprice" type="text" readonly class="form-control" placeholder="Price" value="<?php echo $bprice ?>">
                                                                    </div>

                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Books Available</label>
                                                                        <input name="txtbooksavailable" readonly type="text" class="form-control" placeholder="Books Available" value="<?php echo $bavailable ?>">
                                                                    </div>

                                                                    <div class="form-group res-mg-t-15">
                                                                        <label>Period in Days</label>
                                                                        <input name="txtperiod" readonly type="text" id="getperiod" class="form-control" placeholder="Period">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress" style="text-align: right">
                                                                        <input type="Submit" value="Request Issue Book" class="btn btn-primary waves-effect waves-light">
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
