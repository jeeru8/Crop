<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pds_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$change = $_REQUEST['input']."000";

$sql = "UPDATE pest_spray SET value='$change' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Spray Duration Changed Successfully";
} else {
    echo "Error Updating Detection: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="detection.php">Go Back</a>