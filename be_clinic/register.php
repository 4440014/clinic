<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Be Clinic Medical Category Bootstrap Responsive Website Template | Register :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>

<script>
	function myfun() {
		var password = document.getElementById("password1").value;
		var con_password = document.getElementById("password2").value;
		var name = document.getElementById("password2").value;
		var email = document.getElementById("password2").value;
		if(name.length < 0) {
			document.getElementById("rq_name").innerText ="Full name is required";
			return false;
		} else {
			document.getElementById("rq_name").innerText ="";
			return true;
		}
		

		if(password.length < 5) {
			document.getElementById("rq_password").innerText ="Password length must be greater than 5 charecters";
			return false;
		}
		if(password.length > 25) {
			document.getElementById("rq_password").innerHTML="Password length must be smaller than 25 charecters";
			return false;
		}
		if(password!=con_password) {
			document.getElementById("rq_password").innerHTML="Passwords are not Same";
			return false;
		}
	}
</script>

<div>
	<?php

	?>
</div>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 top-social-agile text-lg-left text-center">
							<div class="row">
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-map-marker mr-2"></span>Parma Via, Italy
									</p>
								</div>
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-phone mr-2"></span>+1 000263676
									</p>
								</div>
								<!-- social icons -->
								<ul class="col-4 top-right-info">
									<li>
										<a href="#">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="ml-3">
										<a href="#">
											<span class="fa fa-pinterest-p"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
							<div class="row">
								<div class="offset-xl-6 offset-lg-4">
								</div>
								<div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
									<!-- login -->
									<a href="login.php" class="login-button-2 text-uppercase text-bl">
										<span class="fa fa-sign-in mr-2"></span>Login</a>
									<!-- //login -->
								</div>
								<div class="col-xl-3 col-lg-4 col-6 header-w3layouts text-md-right text-left">
									<!-- register -->
									<a href="register.php" class="login-button-2 text-uppercase text-bl">
										<span class="fa fa-pencil-square-o mr-2"></span>Register</a>
									<!-- //register -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top header -->

		<!-- second header -->
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="index.php">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Be</span> Clinic
							</a>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.php">About Us</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="#team">Our Doctors</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</div>
		<!-- //second header -->

		<!-- banner -->
		<div class="main-banner-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Register</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- register -->
	<section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Easy to Register</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Register Now</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
		<form class="login-wrapper" action="registration.php" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter full Name">
						<p id="rq_name"></p>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Enter Email">
						<p id="rq_email"></p>
					</div>
					<div class="form-group">
						<label class="mb-2">Password</label>
						<input type="password" class="form-control" name="password" id="password1" placeholder="Enter Password">
						<p id="rq_password"></p>
					</div>
					<div class="form-group mb-4">
						<label>Confirm Password</label>
						<input type="password" class="form-control" name="password" id="password2" placeholder="Enter Confirm Password">
						<p id="rq_confirm_password"></p>
					</div>
					<button onclick="return myfun();" type="submit" class="btn submit mt-4">Register</button>
					<p class="text-center mt-5">
						<a href="#">By clicking Register, I agree to your terms</a>
					</p>
				</form>
			</div>
		</div>
	</section>
	<!-- //register -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 w3l-footer">
					<!-- logo -->
					<div class="logo2">
						<h2>
							<a href="index.php">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Be</span> Clinic
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
						laudantium, totam rem
						aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Morris Park, New York</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>1234567890</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
					<h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
					</ul>
					<div class="n-right-w3ls mt-5 pt-lg-4">
						<h3 class="mb-sm-4 mb-3 text-wh">Newsletter</h3>
						<form action="#" method="post">
							<div class="row pt-2">
								<div class="col-8 form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email Address" required="">
								</div>
								<div class="col-4 form-group p-sm-0 pl-0">
									<button class="form-control submit btn font-weight-bold" type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer bottom -->
	<!-- copyright -->
	<div class="copy-w3pvt">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-7 w3ls_footer_grid1_left text-lg-left text-center">
					<p>&copy; 2019 Be Clinic. All rights reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-5 w3ls_footer_grid_left1_pos text-lg-right text-center mt-lg-0 mt-2">
					<ul>
						<li>
							<a href="#" class="facebook">
								<span class="fa fa-facebook-f mr-2"></span>Facebook</a>
						</li>
						<li class="mx-3">
							<a href="#" class="twitter">
								<span class="fa fa-twitter mr-2"></span>Twitter</a>
						</li>
						<li>
							<a href="#" class="google">
								<span class="fa fa-google-plus mr-2"></span>Google Plus</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>