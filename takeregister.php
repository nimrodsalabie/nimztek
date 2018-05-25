<?php
session_start();

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect');
}else{
	echo "Connected";
}


$date = mysqli_real_escape_string($con, $_POST['takeregisterdate']);
$name = mysqli_real_escape_string($con, $_POST['takeregisterstudentname']);
$register = mysqli_real_escape_string($con, $_POST['takeregisterregister']);

mysqli_select_db($con,"teachersaide");
$insertdata = "INSERT INTO `".$_SESSION['teacherusername'].$date."register`(`student_name`,`register`) VALUES ('$name','$register')";

if(empty($date) || empty($name) || empty($register)){
	echo "please fill out all fields";
}else{
	
	
	if(!mysqli_query($con,$insertdata)){
	
		$registertable = "CREATE TABLE ".$_SESSION['teacherusername'].$date."register(student_name varchar(256) not null,register varchar(256) not null);";
		
	if(!mysqli_query($con,$registertable)){
	die('Failed to take the register');
}else{
	if(!mysqli_query($con,$insertdata)){
		die('Failed to take the register');
	}else{
		echo "Register was taken successfully";
	   // header("Location:homepage.php");
	}
	}
}else{
	echo "Register was taken successfully";
	//header("Location:homepage.php");
	}
}


?>