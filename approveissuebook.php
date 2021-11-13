<?php

session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$query = "UPDATE books, issuebooks SET issuebooks.Status='Approved',books.BooksAvailable=books.BooksAvailable-1 WHERE issuebooks.BookID=books.BookID AND issuebooks.IssueID=$_GET[bn];";
$query_run = mysqli_query($connection, $query);
if (mysqli_query($connection, $query)) {
    print '<script type ="text/javascript">';
    print 'alert("Book issued successfully!")';
    print '</script>';
    //header("Location: ./librarianviewissuebooks.php");
    echo "<meta http-equiv='refresh' content='0;url=librarianviewissuebooks.php'>";  

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

?>