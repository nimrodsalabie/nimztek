<?php

session_start();

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect:'.mysql_error());
}else{
	echo "Connected";
}


$username = mysqli_real_escape_string($con, $_POST['username']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$title = mysqli_real_escape_string($con, $_POST['title']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$password = mysqli_real_escape_string($con, $_POST['password']);


mysqli_select_db($con,"teachersaide");

if(empty($username) || empty($firstname) || empty($lastname) || empty($title) || empty($gender) || empty($subject) || empty($password)){
	echo "please fill out all the fields";
	}else{
$hashedpassword = password_hash($password,PASSWORD_DEFAULT);

$insertdata = "INSERT INTO `teachers`(`teacher_firstname`, `teacher_lastname`, `teacher_title`, `teacher_gender`, `teacher_subject`, `teacher_username`, `teacher_password`) VALUES ('$firstname','$lastname','$title','$gender','$subject','$username','$hashedpassword')";

if(!mysqli_query($con,$insertdata)){
	die('Failed to create account');
}else{
	echo "Account was created successfully";
	
	$studenttable = "CREATE TABLE ".$username."students(
    student_id int(8) not null PRIMARY KEY AUTO_INCREMENT,
    student_firstname varchar(256) not null,
    student_middlename varchar(256) not null,
    student_lastname varchar(256) not null,
    student_gender varchar(256) not null,
    student_currentage varchar(256) not null,
    student_dob varchar(256) not null,
    student_form varchar(256) not null,
    student_class varchar(256) not null,
    student_house varchar(256) not null,
	searchname varchar(256) not null
    );";
	if(!mysqli_query($con,$studenttable)){
	die('Failed to create student file');
}else{
	header("Location:homepage.php");
	}
}
	

	
}



?>