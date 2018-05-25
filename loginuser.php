<?php

session_start();

$con = mysqli_connect("db4free.net","nimztek","ashley@55");

if(!$con){
	die('Could not connect:'.mysql_error());
}else{
	echo "Connected";
}

$username = mysqli_real_escape_string($con, $_POST['lusername']);
$password = mysqli_real_escape_string($con, $_POST['lpassword']);

if(empty($username) || empty($password)){
	echo "please enter a username and a password";
}else{
	mysqli_select_db($con,"teachersaide");
	$sql = "SELECT * FROM `teachers` WHERE teacher_username='$username'";
	$result = mysqli_query($con,$sql);
	$resultcheck = mysqli_num_rows($result);
	if($resultcheck < 1){
		echo "no results";
	}else{
		if($row = mysqli_fetch_assoc($result)){
			$passwordcheck = password_verify($password,$row['teacher_password']);
			if($passwordcheck == false){
				echo "password incorrect";
			}elseif($passwordcheck == true){
				$_SESSION['teacherusername'] = $row['teacher_username'];
				header("Location:homepage.php");
                exit();
			}
		}
	}
}

?>