<?php
$servername="localhost";
$database="lms";
$username="root";
$password="";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Oops! Connection Failed:" . mysqli_connect_error());
    
}

$publishername= filter_input(INPUT_POST, 'txtpublishername') ;
$publisheraddress= filter_input(INPUT_POST, 'txtpaddress');
$publishercontactno= filter_input(INPUT_POST, 'txtpcontactno');
$publisheremail=filter_input(INPUT_POST,'txtpemailid');
$sql="INSERT INTO `publisher`(`PName`, `PAddress`, `PContactNo`, `PEmail`)"
        . " VALUES ('$publishername','$publisheraddress','$publishercontactno','$publisheremail')";
if(mysqli_query($conn, $sql)){
    print '<script type ="text/javascript">';
    print 'alert("Publisher added successfully!")';
    print '</script>';
    header("Location: ./addpublisher.php");
}
 else {
echo "Error: ". $sql . "<br>" . mysqli_error($conn);    
}
mysqli_close($conn);

?>