<?php
session_start();
$preDefineemail = "shahrukh";
$preDefinePassword = "aaaaa";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if ($preDefineemail == $email && $preDefinePassword == $pass) {
        $_SESSION['account_page'] = $email;

        header('location: admin.php');
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
*{
  margin: 0;
  padding: 0;
}

body{
  background: #e9eaea;
  font-family: roboto;
  user-select: none;
}

.container{
  width: 450px;
  margin: 30px auto;
}

.login{
  width: 100%;
  background: #fff;
  float: left;
  height: 60px;
  line-height: 60px;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
}

.login-form{
  background: #fff;
  padding: 40px;
  clear: both;
  width: 100%;
  box-sizing: border-box;
  height: 400px;
}

.input{
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  margin-bottom: 25px;
  border: 2px solid #e9eaea;
  color: #3e3e40;
  font-size: 14px;
  outline: none;
  transform: all 0.5s ease;
}

.input:focus{
  border: 2px solid #34b3a0;
}

.btn{
  width: 100%;
  background: #34b3a0;
  height: 60px;
  text-align: center;
  line-height: 60px;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  letter-spacing: 1px;
  cursor: pointer;
  margin-bottom: 30px;
}

span a{
  text-decoration: none;
  color: #000;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #3e3e40;
  font-family: roboto;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #3e3e40;
  font-family: roboto;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #3e3e40;
  font-family: roboto;
}
:-moz-placeholder { /* Firefox 18- */
  color: #3e3e40;
  font-family: roboto;
}


	</style>
</head>
<body>


	  <div class="wrapper">
    <div class="container">

      <!-- <div class="login">Log In</div> -->
      <div class="login center">Login</div>

      <div class="login-form">
        <form action="" method="post">
          <input type="text" name="email" placeholder="Email or Username" class="input"><br />
          <input type="password" name="pass" placeholder="Password" class="input"><br />
          <button class="btn" name="submit" type="submit">Login</button>
        </form>
        </div>
       </div>

    </div>
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
