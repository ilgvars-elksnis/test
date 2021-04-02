<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test</title>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

	<link rel="stylesheet" href="css/styling.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>


<body>	

	<div class="picture">
		<img src="images/image_summer.png">
	</div>

	<section class="box">
		<header>
			<div class="logo">
				<img src="images/Union.png">
				<a href="#" class="logoText">pineapple.</a>
			</div>

			<ul class="menu">
				<li><a href="#">About</a></li>
				<li><a href="#">How it works</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</header>
		<div class="textBox">
			<form id="form" class="form" action="submit.php" method="POST">
				<h1>Subscribe to newsletter</h1>
				<p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
				<div class="subscribe">
					<input class="email" id="email" type="" name="email" value=""
						placeholder="Type your email address here..." onkeyup="validation()">
					<button id="button" type="submit" name="button" ><i class="fal fa-long-arrow-right fa-2x"
							onclick="validation()"></i></button>
				</div>
				<span class="error" id="error"></span>				
				<input class="checkBox" type="checkBox" id="box" name="" value="" onchange="validation()">
				<label> I agree to <u><a href="#">terms of service</a></u></label><br>
			</form>
			<div id="congrats" class="congrats hidden">
				<img src="images/ic_success.svg">
				<h2>Thanks for subscribing!</h2>
				<p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
			</div>
			<div class="social">
				<div class="border"></div>
				<div class="icons">
					<a href="#" class="fab fa-facebook-f fa-sm fa-fw"></a>
					<a href="#" class="fab fa-instagram fa-sm fa-fw"></a>
					<a href="#" class="fab fa-twitter fa-sm fa-fw"></a>
					<a href="#" class="fab fa-youtube fa-sm fa-fw"></a>

				</div>
			</div>

		</div>

	</section>

	<!-- Scripts -->

	<!-- No refresh ajax and remove/add hidden-->
	<script src="js\ajax.js"></script>
	
	<!-- Validation messages and congratulations script-->
	<script src="js/validation.js"></script>
	
</body>

</html>