<?php
//index.php
session_start();

$main_value = $_SESSION['account_page'];
if (!$main_value) {
    header('Location:login.php');
}

$connect = new PDO("mysql:host=localhost;dbname=ms2", "root", "");
$query = "SELECT * FROM confirm_guests ORDER BY id";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Wedding Guests List</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139164134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139164134-1');
</script>

		<style type="text/css">
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

		<br />
		<div class="container">
			<h3 align="center">Guests List</h3>
			<br />
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Guest Name</th>
						<th>Email</th>
						<!-- <th>Select</th> -->
						<th>Action</th>
						<!-- <th>Status</th> -->
					</tr>
				<?php
$count = 0;
foreach ($result as $row) {
    $count = $count + 1;
    echo '
					<tr>
						<td>' . $row["name"] . '</td>
						<td>' . $row["email"] . '</td>

						<td>';
    if ($row["is_mail_send"]) {
        echo '	<button  type="button" id="' . $count . '" name="email_button" class="btn btn-success btn-xs email_button" data-uid="' . $row["id"] . '" >Send Invitation</button>';
    } else {
        echo '	<button type="button" id="' . $count . '" name="email_button" class="btn btn-info btn-xs email_button" data-uid="' . $row["id"] . '" >Send Invitation</button>';
    }

    print '</td>
					</tr>
					';
}
?>
					<!-- <tr>
						<td colspan="3"></td>
						<td><button type="button" name="bulk_email" class="btn btn-info email_button" id="bulk_email" data-action="bulk">Send Bulk</button></td></td>
					</tr> -->
				</table>
			</div>
		</div>


		<div class="back">
			<button><a href="admin.php">Back</a></button>
			<button><a href="session_destroy.php" role="button">Logout</a></button>
		</div>

	</body>
</html>

<script>
$(document).ready(function(){
	$('.email_button').click(function(){
		$(this).attr('disabled', 'disabled');
		var id = $(this).attr("id");
		$.ajax({
			url:"sndmail.php",
			method:"POST",
			data:{id:$(this).data("uid")},
			beforeSend:function(){
				$('#'+id).html('Sending...');
				$('#'+id).addClass('btn-danger');
			},
			success:function(response){
				if(response)
				{
					$('#'+id).text('Success');
					$('#'+id).removeClass('btn-danger');
					$('#'+id).removeClass('btn-info');
					$('#'+id).addClass('btn-success');
				}
				else
				{
					$('#'+id).text(response);
				}
				$('#'+id).attr('disabled', false);
			}
		})

	});
});
</script>





