<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="index.css"/>
<title>login</title>
	<script type="text/javascript">
	
	function displaylogin(loginhold,signuphold){
		var loginhold = document.getElementById(loginhold);
		var signuphold= document.getElementById(signuphold);
		
		loginhold.style.visibility='visible';
		signuphold.style.visibility='hidden';
		
		
	}
		
	function displaysignup(loginhold,signuphold){
		var loginhold = document.getElementById(loginhold);
		var signuphold= document.getElementById(signuphold);
		
		signuphold.style.visibility='visible';
		loginhold.style.visibility='hidden';
		
		
	}
	
	</script>
</head>

<body>
	
	 <div id="mainholder">
		 <div id="welcomehold">
			 <h1 id="welcometext">Welcome to Teacher's Aide</h1>
			 <div id="btnhold">
			      <button id="logintogglebutton" onClick="displaylogin('loginhold','signuphold');">login</button>
			      <button id="signuptogglebutton" onClick="displaysignup('loginhold','signuphold');">signup</button>
			 </div>
		 </div>
		 <div id="contexthold">
			 <div id="slidehold">
				 <img id="img1"/>
				 <div id="loginhold">
					    <h1 id="logintext">Login</h1>
				        <form id="loginform" action="loginuser.php" method="post">
                             <input id="username" type="text" placeholder="username" name="lusername"/>
							 <input id="password" type="password" placeholder="password" name="lpassword"/>
                             <input id="loginsubmit" type="submit" value="login"/>
                        </form>
				 
				 </div>
				 <div id="signuphold">
					    <h1 id="signtext">Sign Up</h1>
				        <form id="signupform" action="addnewuser.php" method="POST">
							 <input id="sfirstname" name="firstname" type="text" placeholder="first name"/>
							 <input id="slastname" name="lastname" type="text" placeholder="last name"/>
							 <input id="stitle" name="title" type="text" placeholder="title (Mr,Mrs etc)"/>
							 <input id="sgender" name="gender" type="text" placeholder="male/female"/>
							 <input id="ssubject" name="subject" type="text" placeholder="subject"/>
                             <input id="susername" name="username" type="text" placeholder="username"/>
							 <input id="spassword" name="password" type="password" placeholder="password"/>
                             <input id="signupsubmit" type="submit" value="signup"/>
                        </form>
				 
				 </div>
			 </div>
			 <p id="aboutweb">
			 This website was created by Nimrod Salabie to help teachers to store information about their students online safe and secure.
			 </p>
		 
		 
		 </div>
		 
	</div>
</body>
</html>
