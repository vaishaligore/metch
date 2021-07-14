<?php 

$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	
if(preg_match($regex, $_POST["email"]))
{
	
	
	$name=$_POST["full_name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$subject=$_POST["subject"];
	$message1=$_POST["message"];
		
	$to = "p4pramey@gmail.com";
	$subject = "Enquiry Email";
	
	$message = "
	<html>
	<head>
	<title>Enquiry Email</title>
	</head>
	<body>
	<table>
	<tr>
	<td>Name :$name</td>
	</tr>
	<tr>
	<td>Email : $email</td>
	</tr>
	<tr>
	<td>Mobile : $mobile</td>
	</tr>
	<tr>
	<td>Subject : $subject</td>
	</tr>
	<tr>
	<td>Message : $message1</td>
	</tr>
	</table>
	</body>
	</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <info@sunriseinfosys.com>' . "\r\n";
	
	mail($to,$subject,$message,$headers);
	header("location:contact_us.php?message=success");		
		
}
?>
