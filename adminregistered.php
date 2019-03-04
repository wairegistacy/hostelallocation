<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Admin registered</title>

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

	<?php if(isset($_SESSION['success'])) { ?>

		<div class="alert alert-danger"> <?php echo $_SESSION['success']; ?></div>
		<?php
	}
	?>

	<h1>Administrator registered.</h1>

	<a href="<?php echo base_url(); ?>index.php/admin/adminlogout">Logout</a>
</div>




<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="--><?php //echo base_url();?><!--assets/js/bootstrap.min.js"></script>-->
</body>
</html>
