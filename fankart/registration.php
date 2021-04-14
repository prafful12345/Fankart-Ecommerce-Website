<?php include('server.php') ?>
<!DOCTYPE>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
        <div class="top-nav-bar">
    <div class="search-box">
      
     <a href="index.html"><img src="logo4.png" class="logo"></a>
        <input type="text" class="form-control">
        <span class="input-group-text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></span>
    </div>
    <div class="menu-bar">
      <ul>
        <li><a href="#"><i class="fa fa-shopping-basket"></i>Cart</li>
            <li><a href="http://localhost/duplicate/fankart/registration.php" target="blank">Sign Up</li>
                <li><a href="http://localhost/duplicate/fankart/login.php" target="blank">Login</li>
      </ul>
    </div>
<div class="upper">
  <ul>
    <li><a href="mobilesbrand.html" >Mobiles</a>
    <ul>
      <li><a href="samsung.html" >Samsung</a></li>
      <li><a href="iphone.html" >Apple</a></li>
      <li><a href="vivo.html" >Vivo</a></li>
      <li><a href="redmi.html" >Redmi</a></li>
      <li><a href="oppo.html">Oppo</a></li>
    </ul>
    </li>
      <li><a href="">Mens</a>
            <ul>
              <li><a href="shoebrand.html" >Footware</a>
              </li>
              <li><a href="clothingbrand.html" >Clothing</a></li>
              <li><a href="accessories.html" >Accessories</a></li>
            </ul>
      </li>
        <li><a href="">Womens</a>
                  <ul>
                    <li><a href="womenfootware.html" >Footware</a></li>
                    <li><a href="">Western-wear</a></li>
                    <li><a href="">Indian-wear</a></li>
                    <li><a href="accessories.html" >Accessories</a></li>
                  </ul>
        </li>
          <li><a href="">Kids</a>
                     <ul>
                     <li><a href="">Boys</a></li>
                     <li><a href="">Girls</a></li>
                     </ul>
          </li>
          <li><a href="">Electronics</a>
                    <ul>
                       <li><a href="mobilesbrand.html" >Mobiles</a></li>
                        <li><a href="laptopbrands.html" >Laptops</a></li>
                      <li><a href="televisionbrands.html" >Television</a></li>
                      <li><a href="headphonebrands.html" >Headphones</a></li>
                       <li><a href="camera.html" >Camera</a></li>
                      <li><a href="speaker.html" >Speakers</a></li>
                      
                    </ul>
          </li>
          <li><a href="">Home</a>
            <ul>
              <li><a href="">Furniture</a></li>
              <li><a href="">Kitchen</a></li>
            </ul></li>
          <li><a href="">Sports</a>
                     <ul>
                      <li><a href="">Cycles</a></li>
                      <li><a href="">Football</a></li>
                      <li><a href="">Others</a></li>
                     </ul>
          </li>
  </ul>
</div>
       
     </div>
		<div class="log">
        <div class="form" >
        	<form class="register" action="registration.php?action=register"  method="post">
            <?php include('errors.php') ?>
        		<input type="text" name="username" placeholder="user name" />
                         <input type="text" name="email" placeholder="email-id" />
        		<input type="password" name="password_1" placeholder="password" />
                         <input type="password" name="password_2" placeholder="confirm password" />
        		<br><br>
        		<button type="submit" name="reg_user">create</button><br><br>
        		<p class="message">Already registered?<a href="login.php?action=act">login</a>
        		</p>
        	</form>
        </div>
    </div>

	</body>
</html>