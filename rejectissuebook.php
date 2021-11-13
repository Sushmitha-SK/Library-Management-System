<?php

session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$query = "UPDATE `issuebooks` SET `Status`='Rejected' WHERE IssueID=$_GET[bn]";
$query_run = mysqli_query($connection, $query);
if (mysqli_query($connection, $query)) {
    print '<script type ="text/javascript">';
    print 'alert("Sorry! The Book issue request has been rejected!")';
    print '</script>';
  //  header("Location: ./librarianviewissuebooks.php");
    echo "<meta http-equiv='refresh' content='0;url=librarianviewissuebooks.php'>";  

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
?>