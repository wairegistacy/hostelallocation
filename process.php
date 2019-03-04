<?php
$mysqli= new mysqli('localhost','root','','hostelallocationsystem') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];

}
