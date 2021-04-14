<?php


session_start();

if(!isset($_SESSION['username']))
{	
	$_SESSION['msg']=  "you must log in first to view this page";
	header("location: login.php?action=indexopen");
}

if(isset($_GET['logout']))
{	
	unset($_SESSION['username']);
	session_destroy();
	header("location: login.php?action=act");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE
	</title>
	<style>
		.video-side
		{
			position: left;
			right:0;
			bottom:0;
			min-width:40%;
			max-width:40%;
			width:auto;
			height:auto;
			z-index:-1;
		}
		@media(min-aspect-ratio:16/9)
		{
			.video-side
			{
				width:40%;
				height:40%;
			}
		}
	</style>
	</head>

	<body>

		<h1>WELCOME To Fankart</h1>
               <a href="index.html"><img src="logo4.png"></a>

		<?php

   if(isset($_SESSION['success'])) :  ?>


   <div>
   	<h3>
         <?php

         echo  $_SESSION['success'];
         ?>
   	</h3>
   </div>
   
   <?php endif ?>
  <p>feel free to enjoy our website contents</p>

   <video autoplay loop  class="video-side" muted plays-inline>
   	<source src="ocean.mp4" type="video/mp4">
   	</video>
<?php if(isset($_SESSION['username'])) : ?>

	<h3>WELCOME<strong><?php echo $_SESSION['username']; ?></strong></h3>

	<button><a href="index.php?logout=1">Logout</a></button>

<?php endif ?>

	</body>
</html>