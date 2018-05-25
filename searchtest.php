<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="searchstudent.css"/>
<title>Search results</title>
</head>

<body>
	
<div align="center">
	<table>
		
		
	<?php
session_start();
$con = mysqli_connect("localhost","root","");

if(!$con){
	die('Could not connect');
}else{
	echo "<h1>Search Results</h1>";
}


$testname = mysqli_real_escape_string($con, $_POST['viewgradename']);

if(empty($testname)){
	echo "please enter a test name";
}else{
	mysqli_select_db($con,"teachersaide");
	
	$sqlsearchtest = "SELECT * FROM `".$_SESSION['teacherusername'].$testname."test`";
	
	$result = mysqli_query($con,$sqlsearchtest);
	$resultcheck = mysqli_num_rows($result);
	      if($resultcheck < 1){
						echo "Test cannot be found!";
					}else{
			  echo "<b>$testname</b><tr><th>Student name</th><th>Grade</th></tr>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>".$row['student_name']."</td><td>".$row['grade']."</td>";
						}
					}
}
?>
		
	</table>
	</div>
</body>
</html>