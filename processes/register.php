<?php

include '../includes/db.php';

$first_name       =  $_POST['first_name'];
$last_name  	  =  $_POST['last_name'];
$email 			  =  $_POST['email'];
$password   	  =  $_POST['password'];
$confirm_password =  $_POST['confirm_password'];
$gender 		  =  $_POST['gender'];

error_reporting(E_ALL); 
ini_set("display_errors", 1);

/*
first name must not be empty.
last name must not be empty
email must not be empty
password must not be empty and it must match 
confirm_password field
*/

if ((!empty($first_name)) && (!empty($last_name)) && (!empty($email)) && (!empty($password)))
{
	if (strlen($password) < 7)
	{
		echo"1";
		exit();
	}
	else if($password != $confirm_password)
	{
		echo"2";
		exit();
	}

	//check if email exists
	$existing_email = $conn->query("SELECT email FROM users WHERE email = '$email'");
	
	if(mysqli_num_rows($existing_email))
	{
		echo"5";
		exit();
	}

	//Encrypt password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$conn->query("INSERT INTO users(first_name, last_name, email, password, gender) VALUES('$first_name', '$last_name', '$email', '$hashed_password', '$gender');");

	echo"4";
	exit();
	//header('Location: ../home.php');
	//exit();
}
else
{
	echo"3";
	exit();
}


?>

