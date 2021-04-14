<?php

session_start();


//intialising a variable
$username = "";
$email = "";

$errors = array();

//connect to db
$db  = mysqli_connect('localhost','root','','practise') or die("could not able to conect to database");

if($_REQUEST['action'] == "register" && isset($_REQUEST['action'])){
		//register users
		    $username = mysqli_real_escape_string($db, $_POST['username']);
		    $email = mysqli_real_escape_string($db,$_POST['email']);
		    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		  	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

		//form validation checking the form information
		if(empty($username))
		{
		  array_push($errors, "username is required ");
		};

		if(empty($email))
		{
			array_push($errors,"email is required");	
		};
		if(empty($password_1))
		{
			array_push($errors,"password is required");
		};

		if($password_1 != $password_2)
		{
			array_push($errors,"password do not match");
		};

	//check db for existing user with samme username

	$user_check_query= "SELECT *FROM user WHERE username ='$username' or email ='$email' LIMIT 1";


	  $results= mysqli_query($db,$user_check_query);
	   $user = mysqli_fetch_assoc($results);


	   if($user)
	{

	 if($user['username'] == $username)
	 	{arrary_push($errors, "username already exists");}

	 	if($user['email']== $email)
	 	{array_push($errors,"this email id is already has a registered username");}
	}


	//register the user if no error

	if(count($errors) == 0)
	{
		$password= md5($_POST['password_1']);//this will encrpt the password
		$query = "INSERT INTO user (username,email,password)  VALUES('$username','$email','$password')";

		mysqli_query($db,$query);
		$_SESSION['username']=$username;
		$_SESSION['success']= "you are now logged in ";

		header('location: index.php');
	}
}
if($_REQUEST['action'] == "login" && isset($_REQUEST['action'])){
//login user
	if(isset($_POST['login_user'])){
		$username = $_POST['username'];
		$password= $_POST['password_1'];

		if(empty($username))
		{
	           array_push($errors, "username is required");
		}

		if(empty($password))
		{
	           array_push($errors, "password is required");
		}

		if(count($errors) == 0)
		{
			$password = md5($password);

			$query= "SELECT * FROM user WHERE username='$username' AND password ='$password' ";
			$results= mysqli_query($db,$query);

			//print_r($results);
			//echo "<br>".$username."<br>".$password;
			if(mysqli_num_rows($results))
			{
				$_SESSION['username']= $username;
				$_SESSION['success'] = "logged in succesfully"; 
				header('location: index.php');
			}
			else
			{
				array_push($errors, "wrong username/password combination please try again!!");
			}
		}
	}
}
  ?>