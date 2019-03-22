<?php

session_start();


//ToDo Play with this
if(isset($_SESSION['first_name']))
{
	$session_name = $_SESSION['first_name'];
}
else
{
	$session_name = null;
}
?>

	<!-- attach CSS/bootstrap styles -->
  	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
  	<link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">

  	<!--Icon and gkyphs-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- attach JavaScripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="js/js.js"></script>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 0px;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="/~mtugulea/home.php">The Movie Temple</a>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="nav justify-content-end" style="display: inline-flex;">
		  	</ul>
		  	<ul class="nav navbar-nav navbar-right">
		  	<li class="nav-item dropdown">
		    	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    		 Hi, <?php echo $session_name; ?>
		    	</a>
		    	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			      	<a class="dropdown-item" href="#">Profile</a>
			      	<a class="dropdown-item" href="#">Dashboard</a>
			      	<div class="dropdown-divider"></div>

			      	<?php if(isset($_SESSION['id'])) {
			      		echo '<form action="processes/logout.php" method="POST">
			      		<button type="submit" name="submit">Logout</button>';

			      	}
			      	?>
		    	</div>
		  	</li>
		</ul>
	</div>
</nav>


