<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
        $query="DELETE FROM `books` WHERE `BookID`=$_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book deleted successfully!");
	window.location.href = "viewbooks.php";
</script>