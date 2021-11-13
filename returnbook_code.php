<?php

session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lms");
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'lms'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$sql = "SELECT * FROM issuebooks where IssueID=$_GET[rb]";
$issuequery = mysqli_query($conn, $sql);
if (!$issuequery) {
    die('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($issuequery)) {
    $r_id = $row['IssueID'];
    $re_memberid = $row['MemberID'];
    $re_bookid = $row['BookID'];
    $re_booktitle = $row['BookTitle'];
    $re_issuedate = $row['IssueDate'];
    $re_duedate = $row['DueDate'];
    $timezone = "Asia/Kolkata";
    date_default_timezone_set($timezone);
    $today = date("Y-m-d");
    //$re_today = filter_input(INPUT_POST, $today);
    //$re_period = filter_input(INPUT_POST, $row['Period']);
    $penalty = '';
    $i_date = $row['IssueDate'];
    $i_date1 = strtotime($i_date);
    $d_date = $row['DueDate'];
    $to_date = time(); // Return Date
    $from_date = strtotime($d_date);
    $day_diff = $to_date - $from_date;
    $days = floor($day_diff / (60 * 60 * 24)) . "\n";
    //   $row = mysqli_fetch_assoc($query);
    if ($days > 15) {
        $penalty = 5;
        $fine = $days * $penalty;
        echo $fine;
    } else {
        $fine = 0;
        echo $fine;
    }
    $re_fine = $fine;
}

$query = "UPDATE books, issuebooks SET issuebooks.Status='Returned',books.BooksAvailable=books.BooksAvailable+1 WHERE issuebooks.BookID=books.BookID AND issuebooks.IssueID=$_GET[rb];";
$query .= "INSERT INTO `returnbooks`(`MemberID`, `IssueID`, `BookID`, `IssueDate`, `DueDate`, `ReturnDate`, `Penalty`) "
        . "VALUES ('$re_memberid','$r_id','$re_bookid','$i_date','$d_date','$today','$re_fine')";
$query_run = mysqli_query($connection, $query);
if (mysqli_multi_query($connection, $query)) {
    print '<script type ="text/javascript">';
    print 'alert("Book returned successfully!")';
    print '</script>';
    echo "<meta http-equiv='refresh' content='0;url=returnbooks.php'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($conn);
?>
