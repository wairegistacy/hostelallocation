<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome </title>

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
</head>
<body>
<div id="container">
<ul>
	<li><a href="index.php/auth/adminLogin">Admin</a></li>
	<li><a href="index.php/auth/ownerlogin">Owner</a></li>
</ul>
</div><br><br>
<div id="container">
	<h1>Welcome to our website</h1>

	<div id="body">
		<p>Are you looking for a hostel that <br>is safe and convenient for you?</p>

<!--		<p>If you would like to edit this page you'll find it located at:</p>-->
<!--		<code>appllocalication/views/welcome_message.php</code>-->

<!--		<p>The corresponding controller for this page is found at:</p>-->
<!--		<code>application/controllers/Welcome.php</code>-->

		<p>This hostel helps you look for <br>hostels that are of your choice<br> according to their location among other things you will find of convenience.</p>
	</div>
	<div class="form">
		<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px #999; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #fffbff; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 25px" class="Mybutton" type="button" value="Register" onclick="window.location.href='index.php/auth/register'"/><br><br>
		<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px #999; -webkit-box-shadow:6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #f6fff7; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 25px" class="Mybutton" type="button" value="Login" onclick="window.location.href='index.php/auth/login'"/><br><br>

	</div>

</div>

</body>
</html>
