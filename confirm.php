<?php

$conn = mysqli_connect("localhost", "root", "", "ms2");
session_start();

$idedit=$_GET["id"];
$_SESSION['id']=$idedit;
//echo $idedit;
	

	
	$sqll=mysqli_query($conn,"SELECT * FROM `user` WHERE id ='$idedit'");
	$row=mysqli_fetch_assoc($sqll);
    echo $id = $row['id'];
    echo $name = $row['name'];
    echo $email = $row['email'];
    echo $msg = $row['msg'];
    echo $contact = $row['contact_number'];
    echo $noOfGuests = $row['number_of_guests'];
    echo $donet = $row['donet'];
    echo $confirm = "confirm";
    
    $confirm = mysqli_query($conn,"INSERT INTO confirm_guests (id, name, email, msg, contact_number,
                                number_of_guests, donet)
        VALUES('$id','$name','$email','$msg', '$contact', '$noOfGuests', '$donet');");
    $sql=mysqli_query($conn,"UPDATE `user` SET `confirm`='$confirm' WHERE id='$idedit'");

    header('location:data.php');
?>
