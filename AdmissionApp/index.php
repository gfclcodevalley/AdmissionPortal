<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
		#left-div,#right-div{
			height: 450px;
		}
		#left-div{
			background-image:url("assets/images/matric.jpg");
			background-size:cover;
		}
		#right-div{
			padding-left: 10%;
			padding-right: 10%;
		}
		.row{
			box-shadow:5px 5px lightgrey;
			margin-bottom: 50px;
		}
		#logo img{
			width: 20%;
		}
		form div{
			margin-top: 10px;
			margin-bottom: 10px;
		}
		input{
			width: 100%;
			height: 40px;
		}
		#forget,#register{
			display: block;
			font-size:18px;
		}
		.footer{
			background-color: rgba(0,0,0,0.8);
			color: white;
		}
	</style>
</head>
<body>
	<?php
		include("lib/header.php");
	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12" id="left-div">
				
			</div>
			<div class="col-lg-6 col-sm-12" id="right-div">
				<form>
					<div id="logo">
						<img src="assets/images/matric-cap.jpg">
					</div>
					<div id="signinlabel">
						<h3>Sign into your account</h3>
					</div>
					<div id="emailfield">
						<input type="email" name="email" placeholder="Email Address">
					</div>
					<div id="passwordfield">
						<input type="password" name="password" placeholder="Password">
					</div>
					<div id="buttonfield">
						<input type="submit" name="submit" value = "LOGIN">
					</div>
					<div id="forgotfield">
						<a href="" id="forgot">Forgot Password?</a>
						<span id="register">Dont Have an Account? <a href="">Register Here</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
		include("lib/footer.php");
	?>
</body>
</html>