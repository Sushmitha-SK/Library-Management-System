<!Doctype html>
<?php
include('configuration.php');
session_start();
if (isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
}
//   $user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($db, "select * from librarylogin where Username = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['Username'];
//$un = ucfirst($login_session);

$get_fullname = mysqli_query($db, "select * from member where UserName='$user_check'");
$get_fnamerow = mysqli_fetch_array($get_fullname, MYSQLI_ASSOC);
$a = $get_fnamerow['Fullname'];
$get_memberid = $get_fnamerow['MemberID'];
$_SESSION["MemberFullName"] = $a;
$_SESSION["Member_ID"] = $get_memberid;


//echo $get_memberid;
//echo $_SESSION['login_user'];
//echo $getfull_name;
//echo 'Hi, ' . $_SESSION["MemberFullName"] . ' ' . $_SESSION["Member_ID"];


if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
}
