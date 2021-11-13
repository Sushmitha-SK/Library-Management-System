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

$get_librariandata = mysqli_query($db, "select * from librarian where Username='$user_check'");
$get_librarian_row = mysqli_fetch_array($get_librariandata, MYSQLI_ASSOC);
$L_Fullname = $get_librarian_row['Name'];
$L_ID = $get_librarian_row['LibrarianID'];

$_SESSION["LibrarianName"] = $L_Fullname;
$_SESSION["Librarian_ID"] = $L_ID;


if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
}
?>