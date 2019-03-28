<?php 

	session_start();
	//login from login page
	if (isset($_POST['login'])){
		login();
	}

	function login() {

	include 'connection.php';
	$_SESSION['error'] = "Incorrect username or password!";
	$username=$_POST['username'];
	$password=$_POST['password'];

        // attempt login if no errors on form
		$password = md5($password);

		$query = "SELECT * FROM credentials WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['group_id'] == '0') {

				$_SESSION['user'] = $logged_in_user;
				header('location: index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;

				echo "WALA KA! HINDI KA ADMIN! WAG KA NG MAG TRY PA!";
			}
		}			
	}
?>