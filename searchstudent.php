

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="searchstudent.css"/>
<title>Search Results</title>
</head>

<body>
	
	<div align="center">
	<table>
		<tr>
			<th>First name</th>
			<th>Middle name</th>
			<th>Last name</th>
			<th>Gender</th>
			<th>age</th>
			<th>Date of Birth</th>
			<th>Form</th>
			<th>Class</th>
			<th>House</th>
		</tr>
		
	<?php
session_start();
$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect');
}else{
	echo "<h1>Search Results</h1>";
}


$studentfirstname = mysqli_real_escape_string($con, $_POST['searchstudentfirstname']);
$studentlastname = mysqli_real_escape_string($con, $_POST['searchstudentlastname']);

if(empty($studentfirstname) || empty($studentlastname)){
	echo "please enter a first name and a last name";
}else{
	mysqli_select_db($con,"teachersaide");
	$sqlsearchname = "SELECT * FROM `".$_SESSION['teacherusername']."students` WHERE searchname='$studentfirstname$studentlastname'";
	$result = mysqli_query($con,$sqlsearchname);
	$resultcheck = mysqli_num_rows($result);
	
	if($resultcheck < 1){
		echo "no results";
	}else{
		if($row = mysqli_fetch_assoc($result)){
			
			echo "<tr><td>".$row['student_firstname']."</td><td>".$row['student_middlename']."</td><td>".$row['student_lastname']."</td><td>".$row['student_gender']."</td><td>".$row['student_currentage']."</td><td>".$row['student_dob']."</td><td>".$row['student_form']."</td><td>".$row['student_class']."</td><td>".$row['student_house']."</td></tr>";
			
		}
	}
}
?>
		
	</table>
	</div>
	
</body>
</html>