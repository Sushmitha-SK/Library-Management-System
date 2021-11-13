<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
        //$query="DELETE FROM `member` WHERE MemberID=$_GET[um]";
	$query="DELETE a.*, b.* FROM `member` as a, `librarylogin` as b WHERE a.`MemberID` = b.`ID` AND a.`MemberID` = $_GET[um]";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Member successfully deleted!");
	window.location.href = "viewmembers.php";
</script>