<?php

session_start();

$main_value = $_SESSION['account_page'];
if (!$main_value) {
    header('Location:login.php');
}

$conn = mysqli_connect("localhost", "root", "", "ms2");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqll = mysqli_query($conn, "SELECT * FROM `user` WHERE confirm != 1  ");

?>

<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139164134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139164134-1');
</script>

 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 20px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}


  .back>button{
  	margin-top: 44px;
    text-align: center;
    /*margin-left: 190px;*/
    background-color: #588C7E;
    width: 200px;
    font-size: 20px;
    /*color: #fff;*/

  }

  .back>button>a{
  	color: #fff;
  }

 </style>
</head>
<body>
<!-- <a class="btn btn-sm btn-primary" href="session_destroy.php" role="button">Logout</a> -->

            <table class="table table-striped">
				<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Number of guests</th>
					<th>Confirmation</th>
				</tr>
				</thead>
				<tbody>

				<?php

while ($row = mysqli_fetch_assoc($sqll)) {

    ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['contact_number']; ?></td>
							<td><?php echo $row['number_of_guests']; ?></td>
							<td><a href="confirm.php?id=<?php echo $row['id']; ?>">Confirm</a></td>
						</tr>
					<?php
}
?>
				</tbody>
			</table>

			<div class="back">
				<button><a href="admin.php">Back</a></button>
        <button><a href="session_destroy.php" role="button">Logout</a></button>
			</div>
</body>
</html>