<?php 
include 'credentials/connection.php';

$sql = "SELECT count(id) AS total FROM pest_all WHERE pest_1 = 'rat' ";
$result = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
