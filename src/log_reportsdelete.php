<?php 
	include 'credentials/connection.php';

	$id = $_POST['delete_id'];
	$sql = mysqli_query($conn,"DELETE FROM log_reports WHERE id = '$id'");
	$query = mysqli_query($conn, $select);
	header("location: log_reports.php");
	exit();

?>