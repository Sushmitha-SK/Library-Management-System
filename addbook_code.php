<?php
$servername="localhost";
$database="lms";
$username="root";
$password="";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Oops! Connection Failed:" . mysqli_connect_error());
    
}
//$bookid= filter_input(INPUT_POST,'txtbookid');
$booktitle= filter_input(INPUT_POST, 'txtbooktitle');
$ISBNNo= filter_input(INPUT_POST, 'txtISBNNo');
$Author= filter_input(INPUT_POST, 'txtauthor');
$PID= filter_input(INPUT_POST, 'txtPID');
$Edition= filter_input(INPUT_POST, 'txtEdition');
$Price= filter_input(INPUT_POST, 'txtPrice');
$Category= filter_input(INPUT_POST, 'txtcategory');
$BooksAvailable= filter_input(INPUT_POST, 'txtbooksavailable');

$sql="INSERT INTO `books`(`BookTitle`, `ISBNNo`, `Author`, `PID`, `Edition`, `Price`, `Category`, `BooksAvailable`)"
        . " VALUES ('$booktitle','$ISBNNo','$Author','$PID','$Edition','$Price','$Category','$BooksAvailable')";
if(mysqli_query($conn, $sql)){
    print '<script type ="text/javascript">';
    print 'alert("Book added successfully!")';
    print '</script>';
    echo "<meta http-equiv='refresh' content='0;url=addbook.php'>";

   // header("Location: ./addbook.php");
}
 else {
echo "Error: ". $sql . "<br>" . mysqli_error($conn);    
}
mysqli_close($conn);

?>