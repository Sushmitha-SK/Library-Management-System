<?php

$servername = "localhost";
$database = "lms";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Oops! Connection Failed:" . mysqli_connect_error());
}

$issueid = filter_input(INPUT_POST, 'txtissueid');
$member_id = filter_input(INPUT_POST, 'txtmemberid');
$bookid = filter_input(INPUT_POST, 'txtbookid');
$booktitle = filter_input(INPUT_POST, 'txtbooktitle');
$issuedate = filter_input(INPUT_POST, 'txtissuedate');
$duedate = filter_input(INPUT_POST, 'txtduedate');
$period = filter_input(INPUT_POST, 'txtperiod');
$issuestatus = "New";


$sql = "INSERT INTO `issuebooks`(`MemberID`, `BookID`, `BookTitle`, `IssueDate`, `DueDate`, `Period`,`Status`) "
        . "VALUES ('$member_id','$bookid','$booktitle','$issuedate','$duedate','$period','$issuestatus')";
if (mysqli_query($conn, $sql)) {
    print '<script type ="text/javascript">';
    print 'alert("Book issue request placed successfully!")';
    print '</script>';
    echo "<meta http-equiv='refresh' content='0;url=memberissuebook.php'>";

    // header("Location: ./memberissuebook.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>