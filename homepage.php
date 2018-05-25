<!doctype html>

<?php
session_start();
if(isset($_SESSION['teacherusername'])){
	
}else{
	session_unset();
    session_destroy();
    header("Location:index.html");
}
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="homepage.css"/>
<title>Home</title>
	<?php $currentuser = $_SESSION['teacherusername'];?>
	
	<script type="text/javascript">
			
		function displayaddnewstudent(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,vregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
	    var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
			
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'visible';
		studenthold.style.visibility = 'visible';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'hidden';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'hidden';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'hidden';
		
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#8A8A8A';
		studentstoggle.style.background = '#3FB693';
		gradestoggle.style.background = '#8A8A8A';
	}
		
		function displayhome(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,vregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'visible';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'hidden';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'hidden';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'hidden';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'hidden';
			
		hometoggle.style.background = '#3FB693';
		registertoggle.style.background = '#8A8A8A';
		studentstoggle.style.background = '#8A8A8A';
		gradestoggle.style.background = '#8A8A8A';
	}
		function displaytakeregister(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,vregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'visible';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'hidden';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'visible';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'hidden';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'hidden';
			
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#3FB693';
		studentstoggle.style.background = '#8A8A8A';
		gradestoggle.style.background = '#8A8A8A';
	}
		function displayviewregister(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,vregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'hidden';
		vregisterhold.style.visibility = 'visible';
		registerhold.style.visibility = 'visible';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'hidden';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'hidden';
			
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#3FB693';
		studentstoggle.style.background = '#8A8A8A';
		gradestoggle.style.background = '#8A8A8A';
	}
		function displayallstudents(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,vregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'visible';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'hidden';
		allstidentshold.style.visibility = 'visible';
		gradehold.style.visibility = 'hidden';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'hidden';
			
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#8A8A8A';
		studentstoggle.style.background = '#3FB693';
		gradestoggle.style.background = '#8A8A8A';
		
	}
		
		function displayaddtest(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,tregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'hidden';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'hidden';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'visible';
		tgradehold.style.visibility = 'visible';
		vgradehold.style.visibility = 'hidden';
			
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#8A8A8A';
		studentstoggle.style.background = '#8A8A8A';
		gradestoggle.style.background = '#3FB693';
	}
		function displayviewtest(tregisterhold,homehold,newstudenthold,studenthold,vregisterhold,registerhold,allstidentshold,gradehold,hometoggle,registertoggle,tregistertoggle,tregistertoggle,studentstoggle,addnewstudenttoggle,allstudenttoggle,gradestoggle,tgradehold,vgradehold){
		var tregisterhold = document.getElementById(tregisterhold);
		var homehold = document.getElementById(homehold);
		var	newstudenthold = document.getElementById(newstudenthold);
		var	studenthold = document.getElementById(studenthold);
		var	vregisterhold = document.getElementById(vregisterhold);
		var	registerhold = document.getElementById(registerhold);
		var	allstidentshold =  document.getElementById(allstidentshold);
		var	gradehold = document.getElementById(gradehold);
		var hometoggle = document.getElementById(hometoggle);
		var registertoggle = document.getElementById(registertoggle);
		var tregistertoggle = document.getElementById(tregistertoggle);
		var vregistertoggle = document.getElementById(vregistertoggle);
		var studentstoggle = document.getElementById(studentstoggle);
		var addnewstudenttoggle = document.getElementById(addnewstudenttoggle);
		var allstudenttoggle = document.getElementById(allstudenttoggle);
		var gradestoggle = document.getElementById(gradestoggle);
		var	tgradehold = document.getElementById(tgradehold);
		var vgradehold = document.getElementById(vgradehold);
		
		tregisterhold.style.visibility = 'hidden';
		homehold.style.visibility = 'hidden';
		newstudenthold.style.visibility = 'hidden';
		studenthold.style.visibility = 'hidden';
		vregisterhold.style.visibility = 'hidden';
		registerhold.style.visibility = 'hidden';
		allstidentshold.style.visibility = 'hidden';
		gradehold.style.visibility = 'visible';
		tgradehold.style.visibility = 'hidden';
		vgradehold.style.visibility = 'visible';
			
		hometoggle.style.background = '#8A8A8A';
		registertoggle.style.background = '#8A8A8A';
		studentstoggle.style.background = '#8A8A8A';
		gradestoggle.style.background = '#3FB693';
	}
		
		
	</script>
</head>

<body>
	
	
	<div id="contenthold" align="center">
		
		<div id="registerhold" >
			
			<div id="tregisterhold">
				<div id="tregisterholdinput">
				    <h1 id="takeregistertext">Take Register</h1>
				    <form id="takeregisterform" action="takeregister.php" method="POST">
					   
						<input id="takeregisterstudentdate" name="takeregisterdate" type="number" placeholder=" date ddmmyyyy eg:25042018"/>
						 <input id="takeregisterstudentname" name="takeregisterstudentname" type="text" placeholder="student's name"/>
						<input id="takeregisterregister" name="takeregisterregister" type="text" placeholder="A/P"/>
                        <input id="markregistersubmit" type="submit" value="mark"/>
                    </form>
		        </div>
				<div id="tregisterholdstudents">
					<ol id="tregisterallstudentslist" type="1">
<?php
$con = mysqli_connect("localhost","root","");
				
				if(!$con){
					echo "Cannot connect to Database";
				}else{
					echo "<b>ALL STUDENTS</b>";
					mysqli_select_db($con,"teachersaide");
					$sql = "SELECT student_firstname,student_lastname FROM `".$currentuser."students` ";
					$result = mysqli_query($con,$sql);
					$resultcheck = mysqli_num_rows($result);
	                if($resultcheck < 1){
						echo "<li>NO STUDENTS ADDED AS YET!</li>";
					}else{
						while($row = mysqli_fetch_assoc($result)){
							echo "<li><a>".$row['student_firstname']." ".$row['student_lastname']."</a></li>";
						}
					}
				}
?>
		    </ol>
				</div>
		    </div>
			
			<div id="vregisterhold">
				<h1 id="viewregistertext">View Register</h1>
				<form id="viewregisterform" action="searchregister.php" method="POST">
					<input id="viewregistername" name="viewregistername" type="number" placeholder="ddmmyyyy eg:25042018"/>
                    <input id="viewregistersubmit" type="submit" value="view"/>
                </form>
		    </div>
		</div>
		
		<div id="studenthold">
			<div id="allstidentshold" align="center">
				<h1 id="searchstudenttext">Search Student</h1>
				<form id="searchstudentform" action="searchstudent.php" method="POST">
					<input id="searchstudentfirstname" name="searchstudentfirstname" type="text" placeholder="student first name"/>
					<input id="searchstudentlastname" name="searchstudentlastname" type="text" placeholder="student last name"/>
                    <input id="searchstudentsubmit" type="submit" value="search"/>
                </form>
		    </div>
			
			<div id="newstudenthold" align="center">
				<h1 id="newstudenttext">New Student</h1>
				<form id="addstudentform" action="addnewstudent.php" method="POST">
					<input id="studentfirstname" name="studentfirstname" type="text" placeholder="first name"/>
					<input id="studentmiddlename" name="studentmiddlename" type="text" placeholder="student middle name"/>
					<input id="studentlastname" name="studentlastname" type="text" placeholder="student last name"/>
					<input id="studentgender" name="studentgender" type="text" placeholder="male/female"/>
					<input id="studentage" name="studentage" type="number" placeholder="current age"/>
					<input id="studentdob" name="studentdob" type="number" placeholder="date of birth ddmmyyyy eg:25042018"/>
					<input id="studentform" name="studentform" type="text" placeholder="form"/>
					<input id="studentclass" name="studentclass" type="text" placeholder="class"/>
					<input id="studenthouse" name="studenthouse" type="text" placeholder="house"/>
                    <input id="addstudentsubmit" type="submit" value="add student"/>
                </form>
				
		    </div>
		</div>
		
		<div id="gradehold">
				<div id="tgradehold">
				<div id="tgradeholdinput">
				    <h1 id="takegradetext">Add Test Resuls</h1>
				    <form id="takeregisterform" action="addtest.php" method="POST">
					   
						<input id="takegradetestname" name="takegradetestname" type="text" placeholder="test name"/>
						 <input id="takegradestudentname" name="takegradestudentname" type="text" placeholder="student's name"/>
						<input id="taketestgrade" name="taketestgrade" type="text" placeholder="grade"/>
                        <input id="markgradesubmit" type="submit" value="add"/>
                    </form>
		        </div>
				<div id="tgradeholdstudents">
					<ol id="tgradeallstudentslist" type="1">
<?php
$con = mysqli_connect("localhost","root","");
				
				if(!$con){
					echo "Cannot connect to Database";
				}else{
					echo "<b>ALL STUDENTS</b>";
					mysqli_select_db($con,"teachersaide");
					$sql = "SELECT student_firstname,student_lastname FROM `".$currentuser."students` ";
					$result = mysqli_query($con,$sql);
					$resultcheck = mysqli_num_rows($result);
	                if($resultcheck < 1){
						echo "<li>NO STUDENTS ADDED AS YET!</li>";
					}else{
						while($row = mysqli_fetch_assoc($result)){
							echo "<li><a>".$row['student_firstname']." ".$row['student_lastname']."</a></li>";
						}
					}
				}
?>
		    </ol>
				</div>
		    </div>
			
			<div id="vgradehold">
				<h1 id="viewgradetext">View Test Results</h1>
				<form id="viewgradeform" action="searchtest.php" method="POST">
					<input id="viewgradename" name="viewgradename" type="text" placeholder="testname"/>
                    <input id="viewgradesubmit" type="submit" value="view"/>
                </form>
		    </div>
		</div>
		
		<div id="homehold">
			
	<?php
			echo "welcome back ".$_SESSION['teacherusername']."!";
	?>
			
			<ol id="allstudentslist" type="1">
<?php
$con = mysqli_connect("localhost","root","");
				
				if(!$con){
					echo "Cannot connect to Database";
				}else{
					echo "<b>ALL STUDENTS</b>";
					mysqli_select_db($con,"teachersaide");
					$sql = "SELECT student_firstname,student_lastname FROM `".$currentuser."students` ";
					$result = mysqli_query($con,$sql);
					$resultcheck = mysqli_num_rows($result);
	                if($resultcheck < 1){
						echo "<li>NO STUDENTS ADDED AS YET!</li>";
					}else{
						while($row = mysqli_fetch_assoc($result)){
							echo "<li><a>".$row['student_firstname']." ".$row['student_lastname']."</a></li>";
						}
					}
				}
?>
		    </ol>
		</div>
		
	</div>
	
	<header id="headerhold">
		<h1 id="tatext">Teacher's Aide</h1>
		<ul id="togglebuttonshold" >
			<li id="hometoggle"  onClick="displayhome('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>HOME</a></li>
			<li id="registertoggle" >
				<a>REGISTER</a>
			    <ul id="registerbuttonshold" >
			          <li id="tregistertoggle" onClick="displaytakeregister('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>TAKE REGISTER</a></li>
			          <li id="vregistertoggle" onClick="displayviewregister('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>VIEW REGISTER</a></li>
		        </ul>
			
			</li>
			<li id="studentstoggle" >
				<a>STUDENTS</a>
			    <ul id="studentsbuttonshold" >
			          <li id="addnewstudenttoggle"  onClick="displayaddnewstudent('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>ADD NEW STUDENT</a></li>
			          <li id="allstudenttoggle" onClick="displayallstudents('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>SEARCH STUDENTS</a></li>
					<li id="allstudentstoggle" ><form id="allstudentsform" action="allstudents.php" method="POST">
                    <input id="allstudentssubmit" type="submit" value="ALL STUDENTS"/>
                </form></li>
		        </ul>
			</li>
			<li id="gradestoggle" onClick="displaygrades('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>GRADES</a>
			<ul id="registerbuttonshold" >
			          <li id="tregistertoggle" onClick="displayaddtest('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>ADD TEST</a></li>
			          <li id="vregistertoggle" onClick="displayviewtest('tregisterhold','homehold','newstudenthold','studenthold','vregisterhold','registerhold','allstidentshold','gradehold','hometoggle','registertoggle','tregistertoggle','vregistertoggle','studentstoggle','addnewstudenttoggle','allstudenttoggle','gradestoggle','tgradehold','vgradehold');"><a>VIEW TEST</a></li>
		        </ul></li>
			<li id="logouttoggle" ><form id="logoutform" action="logout.php" method="POST">
                    <input id="logoutsubmit" type="submit" value="LOG OUT"/>
                </form></li>
		</ul>
		
	</header>
	
</body>
</html>
