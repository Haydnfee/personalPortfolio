<?php
  require_once ('admin/scripts/config.php');
  if (isset($_POST['name'])){
    $direct = "thankyou.php"
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($email === "") {
      echo "send mail";
      $sendMail = submitMessage($direct, $first_name, $email, $message);
    }

    ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Haydn Fee</title>
<link href="css/foundation.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/app.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body class="contact">
	<h2 class="hidden">Contact Me</h2>
		
	<header id="header">
		<img src="images/logo.svg" id="logo"alt="Logo">
		<div class="navMenu">
			<img src="images/hamNav.png" id="hamBtn">
			<div class="dropDownContent">
				<a href="index.html">Home</a>
				<a href="about.html">About Me</a>
				<a href="work.html">Design&amp;Illustration</a>
				<a href="#">Contact Me</a>
			</div>
		</div>
		
	</header>

	<section class="contactForm large-offset-3 large-6 small-offset-1 small-10">
		<h2 class="hidden">Contact Form</h2>
		<div>
			<form action="contact.php" method="post">
				<label>First Name</label>
				<input type="text" name="first_name" id="fName" placeholder="First Name...">

				<label>Last Name</label>
				<input type="text" name="last_name" id="lName" placeholder="Last Name...">

				<label>Email</label>
				<input type="email" name="email" id="email" placeholder="Email Address...">	

				<label>Message</label>
				<textarea id="message" name="message" rows="5"></textarea>

				<input type="button" value="Send" id="formSubmit">
			</form>
		</div>
	</section>

	<footer>
		<div id="footercon">
			<ul id="footerNav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Me</a></li>
				<li><a href="work.html">Design&amp;Illustration</a></li>
				<li><a href="*">Contact Me</a></li>
			</ul>
				
			<img id="footerLogo" src="images/logo.svg" alt="logo">
		</div>
	</footer>
	
	<!--js load command line-->
	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/jquery.lettering.js"></script>
	<script src="js/jquery.textillate.js"></script>
    <script src="js/app.js"></script>
</body>
</html>