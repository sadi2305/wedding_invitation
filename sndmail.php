
<?php
//send_mail.php
	require 'class/class.phpmailer.php';

if(isset($_POST['id']))
{
	$conn = mysqli_connect("localhost", "root", "", "ms2");
	$guestID=$_POST["id"];


	// get all information of guest by id
	$query = mysqli_query($conn,"SELECT name, email FROM `confirm_guests` WHERE id ='$guestID'");
	$row = mysqli_fetch_assoc($query);
	
	$output = '';

		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'sadiidas2305@gmail.com';					//Sets SMTP username
		$mail->Password = 'teamotultul23';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'sadiidas2305@gmail.com';			//Sets the From email address for the message
		$mail->FromName = 'Shahrukh';					//Sets the From name of the message
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = 'Invitation'; //Sets the Subject of the message
		//An HTML or plain text message body
		$file1 = 'images/mail/1.jpg';
		$file2 = 'images/mail/2.jpg';
		$mail->AddAttachment($file1,'1.jpg');
		$mail->AddAttachment($file2,'2.jpg');
		$mail->Body = '
		<p>You are invited to our wedding</p>
		<p>Please come and give us your blessing!! </p>
		';

		$mail->AltBody = '';

		$result = $mail->Send();						//Send an Email. Return true on success or false on error
		if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
			return false;
		}else{
				// update guest data row column is_mail_send to 1;
   			 $sql=mysqli_query($conn,"UPDATE `confirm_guests` SET `is_mail_send`='1' WHERE id='$guestID'");
			return true;	 
		}


}




	


?>
