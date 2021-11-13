<!DOCTYPE html>
<?php
$GLOBALS['server'] = "localhost";
$GLOBALS['username'] = "root";
$GLOBALS['password'] = "";
$GLOBALS['database'] = "billstudio";
// Create connection
$GLOBALS['conn'] = mysqli_connect($server, $username, $password, $database);
$servername = "localhost";
$database = "billstudio";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully"

$GLOBALS['db'] = mysqli_connect($server, $username, $password, $database);



$fullname = filter_input(INPUT_POST, 'txtfullname');
$dob = filter_input(INPUT_POST, 'txtdob');
$gender = filter_input(INPUT_POST, 'txtgender');
$nationality = filter_input(INPUT_POST, 'txtnationality');
$address = filter_input(INPUT_POST, 'txtaddress');
$city = filter_input(INPUT_POST, 'txtcity');
$state = filter_input(INPUT_POST, 'txtstate');
$country = filter_input(INPUT_POST, 'txtcountry');
$pincode = filter_input(INPUT_POST, 'txtpincode');
$contactno = filter_input(INPUT_POST, 'txtcontactno');
$email = filter_input(INPUT_POST, 'txtemail');
$qualification = filter_input(INPUT_POST, 'txtqualification');
$experience = filter_input(INPUT_POST, 'txtexperience');
$doj = filter_input(INPUT_POST, 'txtdoj');
$designation = filter_input(INPUT_POST, 'txtdesignation');
$department = filter_input(INPUT_POST, 'txtdept');
$extno = filter_input(INPUT_POST, 'txtextno');
$uname = filter_input(INPUT_POST, 'txtusername');
$pword = filter_input(INPUT_POST, 'txtpassword');

$eidquery = "SELECT `auto_increment` as eid FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'employee' AND table_schema='billstudio'";
//$eidquery = mysqli_query("SELECT count(*)FROM employee'");
$eidvalue = mysqli_query($conn, $eidquery);

while ($eidrow = mysqli_fetch_array($eidvalue)) {

    $eid = $eidrow['eid'];
}

if ($designation != 'Project Manager') {
    $loginusertype = 'Employee';
} else {
    $loginusertype = $designation;
}
$sql = "INSERT INTO `employee`(`FullName`, `DOB`, `Gender`, `Nationality`, `Address`, `City`, `State`, `Country`, `Pincode`, `ContactNo`, `Email`, `Qualification`, `Experience`, `DOJ`, `Designation`, `Department`, `ExtNo`, `Username`, `Password`)VALUES ('$fullname', '$dob','$gender','$nationality','$address','$city','$state','$country','$pincode','$contactno','$email','$qualification','$experience','$doj','$designation','$department','$extno','$uname','$pword';)";

$sql .= "INSERT INTO `login`(`employeeid`,`username`,`password`,`usertype`) VALUES ('$eid','$uname','$pword','$loginusertype')";

if (mysqli_multi_query($GLOBALS['db'], $sql)) {
    echo "Employee details registered successfully!";
    header("Location:./newemployee.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


