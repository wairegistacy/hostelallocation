<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Admin Profile</title>

		<style type="text/css">
			::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background: url(hostel2.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			width: 500px;
			height: 350px;
			background-color: #fff;
			margin: 40px;
			color: black;
			align-content: center;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: turquoise;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 30px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {

			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 50px 0 50px;
			align-content: center;
		}
		p{
			font-size: 25px;
			font-family: Calibri;
			align-content: center;
			color: chocolate;
		}

		p.footer {
			text-align: center;
			font-size: 100px;
			border-top: 5px solid #D0D0D0;
			line-height: 50px;
			padding: 0 50px 0 50px;
			margin: 50px 0 0 0;
		}

		#container {
			align-content: center;
			/*margin: 100px;*/
			/*border: 3px solid #D0D0D0;*/
			/*box-shadow: 0 0 8px #D0D0D0;*/
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			color: black;
			background-color: #333;
			overflow: hidden;
			position: fixed;
			top: 0;
			width: 100%;
			position: -webkit-sticky; /* Safari */
			position: sticky;
			top: 0;

		}
		li {
			display: inline;
			float: left;
		}
		a {
			display: block;
			color: black;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			background-color: #dddddd;
		}
		li a:hover {
			background-color: #111;
		}
		.active {
			background-color: #4CAF50;
		}
		li {
			border-right: 1px solid #bbb;
		}

		li:last-child {
			border-right: none;
		}
	</style>

	<!-- Bootstrap -->
<!--	<link href="--><?php //echo base_url();?><!--assets/css/bootstrap.min.css" rel="stylesheet">-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<!--	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
	<!--	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>
<body>
<!--<div id="container">-->
<!--	<ul>-->
<!--		<li><a href="index.php/auth/administrators">Admin</a></li>-->
<!--		<li><a href="index.php/auth/adminlogin">Owners</a></li>-->
<!--		<li><a href="Owners.php">Hostels</a></li>-->
<!---->
<!--	</ul>-->
<!--</div><br><br>-->


<div class="col-lg-8 col-lg-offset-2">

	<?php if(isset($_SESSION['success'])) { ?>

		<div class="alert alert-danger"> <?php echo $_SESSION['success']; ?></div>
		<?php
	}
	?>

	<h1>Welcome <?php echo $_SESSION['Name'];?><br>. Would you like to:<br></h1>

	<div class="form">
		<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px #999; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #fffbff; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 25px" class="Mybutton" type="button" value="Add admin" onclick="window.location.href='adminregister'"/><br><br>
		<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px #999; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #f6fff7; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 25px" class="Mybutton" type="button" value="Add owner" onclick="window.location.href='ownerregister'"/><br><br>

	</div>


	<a href="<?php echo base_url(); ?>index.php/admin/adminlogout">Logout</a>
</div>




<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="--><?php //echo base_url();?><!--assets/js/bootstrap.min.js"></script>-->
</body>
</html>
