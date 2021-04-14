<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>
		  LOGIN
	</title>
	<link rel="stylesheet" rel="text/css" href="login.css">
	</head>

	<body>

	   <div class="login-box">
        <h3>LOGIN &nbsp &nbsp PLEASE!!<h3><br>
	
        <form action="login.php?action=login" method="post">


		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
        	<label for="username" >username :</label>
        	<input type="text" name="username"><br><br>
        </div>


		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
        	<label for="password" >password :</label>
        	<input type="password" name="password_1"><br><br>
        </div>

    <div class="btn">
	<button type="submit" name="login_user">LOG IN</button><br><br>
	 </div>
	 
	 <p>
	NOT A USER?<a href="registration.php?action=act"><b>REGISTER</b></a>
     </p>
    </form>

    </div>
	</body>
</html>