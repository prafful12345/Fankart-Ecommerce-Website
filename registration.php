<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Registration form
	</title>
	</head>

	<body>

       <div class="container">
       	<div class="header">

       		<h2>PLEASE REGISTER !!!</h2>


        </div>

        <form action="registration.php?action=register"  method="post">

        	<?php include('errors.php') ?>


        <div>
        	<label for="username" >username :</label>
        	<input type="text" name="username" required><br><br>
        </div>
 

  <div>
        	<label for="email" >Email :</label>
        	<input type="email" name="email" required><br><br>
        </div>

         <div>
        	<label for="password" >password :</label>
        	<input type="password" name="password_1" required><br><br>
        </div>

         <div>
        	<label for="password" >confirm password :</label>
        	<input type="password" name="password_2" required><br><br><br><br>
        </div>


    <button type="submit" name="reg_user">SUBMIT</button><br><br>

<p>
	ALREADY A USER?<a href="login.php"><b>LOG IN </b></a></p>

    </form>
       </div>

	</body>
</html>