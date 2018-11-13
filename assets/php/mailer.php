<html>
	<body>
<?php
//echo "Coming Soon! -- This Script wil help in mailing...";
if(isset($_POST['submit']))
{
	$uname = $_POST['username'];
	$email = $_POST['email_address'];
	$sub = $_POST['subject'];
	$msg = $_POST['messages'];
	$headers = "From: $email";
	$msg = "From: "$uname."<br><br>".$msg;
	
	mail("ska70836@gmail.com",$sub,$msg,$headers);

}


?>
	</body>
	</html>