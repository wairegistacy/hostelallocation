<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Madaraka</title>
	<style>
		body {
			background: url(hostel5.jpg) no-repeat center center fixed;
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
		p{
			color: #2b542c;
			font-size: 35px;
		}

		.flex-container {
			display: flex;
			flex-flow: row wrap;
			justify-content: center;
			height: 90px;
			align-items: center;
			align-content: space-between;

		}
		table, th, td {
			padding: 15px;
			border: 1px solid black;
			border-collapse: collapse;

		}
		th
		{
			text-align: left;
			width: 50px;
			height: 50px;
		}
		table
		{
			border-spacing: 5px;
			height: 50px;
			align-content: center;
		}
		table#t01 tr:nth-child(even) {
			background-color: #eee;
		}
		table#t01 tr:nth-child(odd) {
			background-color: #fff;
		}
		table#t01 th {
			color: white;
			background-color: black;
		}
		img {
			width: 100%;
		}

	</style>
</head>
<body>

<table style="width:80%;">
	<h1>These are hostels around Madaraka</h1>
	<tr>
		<div class="flex-container">
			<th>
				<p>Female hostels</p>
			</th>
			<th>
				<p>Male Hostels</p>
			</th>
			<th>
				<p>Unisex Hostels</p>
			</th>
		</div>
	</tr>
	<tr>
		<div class="flex-container">
			<th>
				<p>Waridi hostel</p>
				<a href="waridibookings">
					<img src="hostel4.jpg"><br>
				</a>
			</th>
			<th>
				<p>Taarif hostel</p>
				<a href="taarifbookings">
					<img src="hostel1.jpg"><br>
				</a>
			</th>
			<th>
				<p>Ayana hostel</p>
				<a href="ayanabookings">
					<img src="hostel6.jpg"><br>
				</a>
			</th>
		</div>
	</tr>


</table>


</div>
</body>
</html>
