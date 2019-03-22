<?php 

session_start();

include '../includes/db.php';


//$existing_email = $conn->query("SELECT email FROM users WHERE email = 'mariustuaguleaa@gmail.com'");

//(mysqli_num_rows($existing_email));

	

	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($email) && (!empty($password)))
	{
		//Check email
		$get_user_data = $conn->query("SELECT * FROM users WHERE email = '$email'");
		
		$row = mysqli_fetch_assoc($get_user_data);
		
		$hashPwd = password_verify($password, $row['password']);
		if ($hashPwd == true)
		{
			$_SESSION['id'] 		  	= $row['id'];
			$_SESSION['date_created'] 	= $row['date_created'];
			$_SESSION['first_name'] 	= $row['first_name'];
			$_SESSION['last_name'] 		= $row['last_name'];
			$_SESSION['email'] 			= $row['email'];
			$_SESSION['gender'] 		= $row['gender'];
			$_SESSION['role_id'] 		= $row['role_id'];
			header("Location: ../home.php");
			exit();
		}
		else
		{
			echo"incorrect email or password";
			exit();
		}
		
		
		

		var_dump($existing_email);

		//header("Location: ../home.php");
	}	
	else
	{
		echo"1";
		exit();
	}

 ?>