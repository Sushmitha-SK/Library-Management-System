<?php
//session_start();
//$host = "localhost"; /* Host name */
//$user = "root"; /* User */
//$password = ""; /* Password */
//$dbname = "lms"; /* Database name */
//
//$con = mysqli_connect($host, $user, $password,$dbname);
//// Check connection
//if (!$con) {
//  die("Connection failed: " . mysqli_connect_error());
//}
?>

<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'lms');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>