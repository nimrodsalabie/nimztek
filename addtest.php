<?php
session_start();

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect');
}else{
	echo "Connected";
}


$testname = mysqli_real_escape_string($con, $_POST['takegradetestname']);
$name = mysqli_real_escape_string($con, $_POST['takegradestudentname']);
$grade = mysqli_real_escape_string($con, $_POST['taketestgrade']);

mysqli_select_db($con,"teachersaide");
$insertdata = "INSERT INTO `".$_SESSION['teacherusername'].$testname."test`(`student_name`,`grade`) VALUES ('$name','$grade')";

if(empty($testname) || empty($name) || empty($grade)){
	echo "please fill out all fields";
}else{
	
	
	if(!mysqli_query($con,$insertdata)){
	
		$testtable = "CREATE TABLE ".$_SESSION['teacherusername'].$testname."test(student_name varchar(256) not null,grade varchar(256) not null);";
		
	if(!mysqli_query($con,$testtable)){
	die('Failed to take the register');
}else{
	if(!mysqli_query($con,$insertdata)){
		die('Failed to add test results');
	}else{
		echo "Test was added successfully";
	   // header("Location:homepage.php");
	}
	}
}else{
	echo "Test was added successfully";
	//header("Location:homepage.php");
	}
}


?>