<?php 
include 'credentials/connection.php';
//SELECT FROM DATABASE EACH DATA
$sql = "SELECT count(id) AS total FROM pest_all";
//QUERY
$result = mysqli_query($conn, $sql);
//FETCH 
$values = mysqli_fetch_assoc($result);
//EACH TOTAL
$num_rows=$values['total'];
//ECHO TOTAL
echo $num_rows;
?>


							
