<?php
session_start();

$main_value = $_SESSION['account_page'];
if (!$main_value) {
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--font awesome-->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<!--end-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139164134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139164134-1');
</script>

	<style type="text/css">

		.header {
			margin-bottom: 65px;
		}

		.header>h1{
			text-align: center;
		}

		.links {
			text-align: center;
		}

		.links>button{
			/*text-align: center;*/
			/*color: #fff;*/
			width: 310px;
			margin-bottom: 20px;
			font-size: 25px;
			background-color: #792FD6;
		}

		.links>button>a {
			color: #fff;
		}

	</style>
</head>
<body>
<!-- <a class="btn btn-sm btn-primary" href="session_destroy.php" role="button">Logout</a> -->
	<div class="header">
		<h1>RSVP Lists</h1>
	</div>

	<div class="links">

		<button><a href="data.php">All Registered People</a></button>
		<br>
		<button><a href="guestList.php">Guest List</a></button>
		<br>
		<button><a href="mail.php">Send Confirmation Mail</a></button>
		<br>
		<button><a href="session_destroy.php" role="button">Logout</a></button>

		<!-- <div><a href="data.php">All Registered People</a></div>
		<br>
		<div><a href="guestList.php">Guest List</a></div>
		<br>
		<div><a href="mail.php">Send Confirmation Mail</a></div> -->
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!---->
	<script type="text/javascript" src="js\jquery.min.js"></script>
	<script type="text/javascript" src="js\bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	<script type="text/javascript" src="js\custom.js"></script>
</body>
</html>
