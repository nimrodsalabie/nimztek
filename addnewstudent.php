<?php
session_start();

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect');
}else{
	echo "Connected";
}


$studentfirstname = mysqli_real_escape_string($con, $_POST['studentfirstname']);
$studentlastname = mysqli_real_escape_string($con, $_POST['studentlastname']);
$studentmiddlename = mysqli_real_escape_string($con, $_POST['studentmiddlename']);
$studentgender = mysqli_real_escape_string($con, $_POST['studentgender']);
$studentage = mysqli_real_escape_string($con, $_POST['studentage']);
$studentdob = mysqli_real_escape_string($con, $_POST['studentdob']);
$studentclass = mysqli_real_escape_string($con, $_POST['studentclass']);
$studentform = mysqli_real_escape_string($con, $_POST['studentform']);
$studenthouse = mysqli_real_escape_string($con, $_POST['studenthouse']);
$searchname = $studentfirstname.$studentlastname;

if(empty($studentfirstname) || empty($studentlastname) || empty($studentmiddlename) || empty($studentgender) || empty($studentage) || empty($studentdob) || empty($studentclass) || empty($studentform) || empty($studenthouse)){
	echo "please fill out all fields";
}else{
	mysqli_select_db($con,"teachersaide");
	
	$insertdata = "INSERT INTO `".$_SESSION['teacherusername']."students`(`student_firstname`, `student_middlename`, `student_lastname`, `student_gender`, `student_currentage`, `student_dob`, `student_form`, `student_class`, `student_house`,`searchname`) VALUES ('$studentfirstname','$studentmiddlename','$studentlastname','$studentgender','$studentage','$studentdob','$studentform','$studentclass','$studenthouse','$searchname')";
	
	if(!mysqli_query($con,$insertdata)){
	die('Failed to add student');
}else{
	echo "Student was added successfully";
	header("Location:homepage.php");
	}
	
}


?>