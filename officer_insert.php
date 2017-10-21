<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ajd');

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$blood = $_POST['blood'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];



$sql = "insert into officers values('$name','$mobile','$email','$address','$blood','$dob','$gender') ";  
mysqli_query($con, $sql);


?>