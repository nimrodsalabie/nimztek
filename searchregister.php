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


$date = mysqli_real_escape_string($con, $_POST['viewregistername']);

if(empty($date)){
	echo "please enter a date";
}else{
	mysqli_select_db($con,"teachersaide");
	
	$sqlsearchregister = "SELECT * FROM `".$_SESSION['teacherusername'].$date."register`";
	
	$result = mysqli_query($con,$sqlsearchregister);
	$resultcheck = mysqli_num_rows($result);
	      if($resultcheck < 1){
						echo "Register cannot be found!";
					}else{
			  echo "<b>$date</b><tr><th>Student name</th><th>Absent/Present</th></tr>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>".$row['student_name']."</td><td>".$row['register']."</td>";
						}
					}
}
?>
		
	</table>
	</div>
</body>
</html>