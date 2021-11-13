<?php
$servername = "localhost";
$database = "lms";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Oops! Connection Failed:" . mysqli_connect_error());
}

$memberfullname = filter_input(INPUT_POST, 'txtfullname');
$address = filter_input(INPUT_POST, 'txtaddress');
$email = filter_input(INPUT_POST, 'txtemail');
$contactno = filter_input(INPUT_POST, 'txtcontactno');
$memberusername = filter_input(INPUT_POST, 'txtusername');
$memberpassword = filter_input(INPUT_POST, 'txtpassword');
$membertype = "Member";

$sql_u = "SELECT * FROM librarylogin WHERE Username='$memberusername'";
$sql_e = "SELECT * FROM member WHERE Email='$email'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_u) > 0) {
    // $name_error = "Sorry... username already taken"; 
    //  echo $name_error;
    print '<script type ="text/javascript">';
    print 'alert("Sorry! Username already taken!")';
    print '</script>';
    echo "<meta http-equiv='refresh' content='0;url=addmember.php'>";
} else if (mysqli_num_rows($res_e) > 0) {
    // $email_error = "Sorry... email already taken"; 
    //echo $email_error;
    print '<script type ="text/javascript">';
    print 'alert("Sorry! Email ID already taken!")';
    print '</script>';
    echo "<meta http-equiv='refresh' content='0;url=addmember.php'>";
} else {
    $sqlmemberid = 'SELECT MemberID FROM member ORDER BY MemberID DESC LIMIT 1';
    $querymemberid = mysqli_query($conn, $sqlmemberid);
    if (!$querymemberid) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    while ($rowmember = mysqli_fetch_array($querymemberid)) {
        $memberidcount = $rowmember['MemberID'] + 1;
    }
    $sql = "INSERT INTO `member`(`Fullname`, `Address`, `Email`, `ContactNo`, `UserName`, `Password`) VALUES ('$memberfullname','$address','$email','$contactno','$memberusername','$memberpassword');";
    $sql .= "INSERT INTO `librarylogin`(`ID`, `Username`, `Password`, `UserType`) VALUES ('$memberidcount','$memberusername','$memberpassword','$membertype')";
    $query_login = mysqli_query($conn, $sql);
    if (mysqli_multi_query($conn, $sql)) {
        print '<script type="text/javascript">';
        print'alert("Member registered successfully!")';
        print '</script>';
        echo "<meta http-equiv='refresh' content='0;url=addmember.php'>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
