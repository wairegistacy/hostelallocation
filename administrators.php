<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hostelallocationsystem'; // Database Name
//connect to database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if(isset($_POST['name'])) {
	$id = $_POST['name'];

	$sql = 'SELECT * FROM admin where name =' . $name;

	$query = mysqli_query($conn, $sql);

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
}
?>
<html>
<head>
	<title>Administrators</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			padding: 0;
			margin: 0;
		}
		form{
			width: 45px;
			margin: 50px auto;
			text-align: left;
			padding: 20px;
			border: 1px solid #bbbbbb;
			border-radius: 5px;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			background-color: aquamarine;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.input-group{
			margin: 10px 0px 10px 0px;
		}
		.input-group label{
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input{
			height: 30px;
			width: 500%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.btn{
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
		}
	</style>
</head>
<body>
<!--<input type="hidden" name="idnum"value=" $_SESSION["idno"]">-->
<!--<div class = bg>-->
<!--	<div class="header">-->
<!--		<img src="logo.png" alt="Logo">-->
<!--		<div class="header-right">-->
<!--			<a href = "intro.php">Home</a>-->
<!--			<a href = "#doctors">Doctors</a>-->
<!--			<a href = "#services">Services</a>-->
<!--			<a class="active" href="login.php">Appointment</a>-->
<!--			<a href="#contact">Contact</a>-->
<!--			<a href="about.html">About</a>-->
<!--			<a href="index.php?logout='1'" >Logout</a>-->
<!--		</div>-->
<!--	</div>-->
	<h1>Administrators</h1>
	<table class="data-table">
		<caption class="title">Administrators</caption>
		<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PHONE</th>
			<th>EMAIL</th>
			<th>EDIT</th>
			<th>DELETE</th>
			<th colspan="2">ACTION</th>
		</tr>
		</thead>
		<tbody>
		<?php
		if(isset($_POST['id'])) {
			$id = $_POST['id'];

			$sql = 'SELECT * FROM admin where id =' . $id;

			$query = mysqli_query($conn, $sql);

			if (!$query) {
				die ('SQL Error: ' . mysqli_error($conn));
			}

			while ($row = mysqli_fetch_array($query)) {

				echo '<tr>
               <td>' . $row['id'] . '</td>
               <td>' . $row['name'] . '</td>
               <td>' . $row['phone'] . '</td>
               <td>' . $row['email'] . '</td>
               <td><a href="user_to_update.php? edit= ' . $row['id'] . '">Edit</a></td>
                 <td><a href="user_to_delete.php?id=' . $row['id'] . '">Delete</a></td>
               
            </tr>';

			}
		}
		?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
<?php require_once 'process.php'?>
<form method="post" action="auth/process">
	<div class="input-group">
		<label>Name: </label>
		<input type="text" name="name">
	</div>
	<div class="input-group">
		<label>Phone: </label>
		<input type="number" name="phone">
	</div>
	<div class="input-group">
		<label>Email: </label>
		<input type="email" name="email">
	</div>
	<div class="input-group">
		<label>Name: </label>
		<button type="submit" name="save" class="btn">Save</button>
	</div>
</form>
</body>
</html>



















