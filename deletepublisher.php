<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
        $query="DELETE FROM `publisher` WHERE `PID`=$_GET[up]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Publisher deleted successfully!");
	window.location.href = "viewpublishers.php";
</script>