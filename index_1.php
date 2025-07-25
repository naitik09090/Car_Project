<?php

	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";

	$con = mysqli_connect($server,$username,$password,$dbname);

	if($con){
		echo "Connected Successfully";
	}else{
		echo "No Connection";
	}

	mysqli_select_db($con, 'project_1');

	$userName = $_POST['user'];
	$Your_Email = $_POST['email'];
	$Your_Password = $_POST['password'];
	$Message = $_POST['message'];

	$query = " insert into userData (userName,Your_Email,Your_Password,Message) values('$userName','$Your_Email','$Your_Password','$Message') ";

	echo "$query";

	mysqli_query($con , $query);

	header('location:index.php');

?>