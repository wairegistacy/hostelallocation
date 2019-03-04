<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Register</title>

	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<!--	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
	<!--	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>
<body>
<div class="col-lg-8 col-lg-offset-2">
	<h1>REGISTRATION PAGE: </h1>
	<p>Please fill in the following details: </p>

	<?php if(isset($_SESSION['success'])) { ?>

		<div class="alert alert-danger"> <?php echo $_SESSION['success']; ?></div>
		<?php
	}
	?>
	<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

	<form action=" " method="post">

		<div class="form-group">
			<label for="name" >Name: </label>
			<input class="form-control" required name="name" id="name" type="text" placeholder="Type your name here">
		</div>
		<div class="form-group">
			<label for="email" >Email: </label>
			<input class="form-control" required name="email" id="email" type="email">
		</div>
		<div class="form-group">
			<label for="phone" >Phone number: </label>
			<input class="form-control" required name="phone" id="phone" type="number">
		</div>
			<div class="form-group">
				<label for="password" >Password: </label>
				<input class="form-control" required name="password" id="password" type="password" onkeyup="CheckPasswordStrength(this.value)">
				<span id="password_strength"></span>
			</div>
			<div class="form-group">
				<label for="confirm password" >Confirm Password: </label>
				<input class="form-control" required name="confirm password" id="confirm password" type="password">
			</div>
			<div class="text-center">
				<button class="btn btn-primary" name="adminregister" onclick="checkPassword()">Register</button>
			</div>
		</div>

	</form>

	<script>

		function checkPassword(){

			if (document.getElementById('password').value !== document.getElementById('cPassword').value){
				alert("Passwords do not match!");
				document.getElementById('password').value = "";
				document.getElementById('cPassword').value = "";

				return false;

			}
		}

		function CheckPasswordStrength(password) {
			var password_strength = document.getElementById("password_strength");


			if (password.length == 0) {
				password_strength.innerHTML = "";
				return;
			}


			var regex = new Array();
			regex.push("[A-Z]");
			regex.push("[a-z]");
			regex.push("[0-9]");
			regex.push("[$@$!%*#?&]");

			var passed = 0;


			for (var i = 0; i < regex.length; i++) {
				if (new RegExp(regex[i]).test(password)) {
					passed++;
				}
			}


			if (passed > 2 && password.length > 8) {
				passed++;
			}


			var color = "";
			var strength = "";
			switch (passed) {
				case 0:
				case 1:
					strength = "Weak";
					color = "orange";
					break;
				case 2:
					strength = "Good";
					color = "darkorange";
					break;
				case 3:
				case 4:
					strength = "Strong";
					color = "yellow";
					break;
				case 5:
					strength = "Very Strong";
					color = "red";
					break;
			}
			password_strength.innerHTML = strength;
			password_strength.style.color = color;
		}
	</script>
</div>
<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="--><?php //echo base_url();?><!--assets/js/bootstrap.min.js"></script>-->
</body>
</html>
