<a href="detection.php">Go Back</a>

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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pds_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pest_detection";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $pestdetectid = $row['id'];
        $pestvalue = $row['value'];

    }
} else {
    echo "0 results";
}
$conn->close();
?>

<?php


                            if (!isset($_GET["d"]) || empty($_GET["d"])) {
                            $data = "0";

                            } else {
                                $data = $_GET["d"];
                            }



                            // Outputs all the result of shellcommand "ls", and returns
                            // the last output line into $last_line. Stores the return value
                            // of the shell command in $retval.



                            //$output = "C:/Users/Birol/ComPrinter.exe /devnum 12/baudrate 2400 /endchar 9"; 
                            //$output = 'C:/Users/Birol/SerialSend.exe /baudrate 9600 "Hello world!"'; 
                            //$output = "echo test > COM12"; 
                            //$output = "set /p x=".'"'."hello".'"'." <nul >\\.\COM12"; 

                            $output = "D:/xampp/htdocs/Crop/src/SerialSend.exe /baudrate 9600 $data"; 
                            $output = shell_exec($output);
                            
                      
                            

                            if($num_rows>$pestvalue){
                                   header("Location: on.php?d=on");
                                   

                            }

                            else{
                                header("Location: on.php?d=off");   
                            }


                            if (!isset($_GET["d"]) || empty($_GET["d"])) {

                            $myfile = fopen("serial.txt", "r") or die("Unable to open file!");
                            $txt = fread($myfile,filesize("serial.txt"));
                            fclose($myfile);

                            } else {
                            $myfile = fopen("serial.txt", "w") or die("Unable to open file!");
                            $txt = "$data";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            }


                            //echo "<br>$txt";
                            ?>﻿


<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="http://www.google.com"; 
    } 
    document.write("You will be redirected to a new page in 5 seconds"); 
    setTimeout('Redirect()', 5000);   
</script>

							