<?php

if(isset($_REQUEST['submit'])){
	
	$conn = new MySQLi("localhost","root","","Signup");
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$c_pass = $_REQUEST['c_pass'];

	$query = "Insert into Userdata values ('$email','$password','0')";
	
	if($conn->query($query)){
		
		echo "Successfully Signed UP";
	}
	else{
		
		echo "Error occurred";
		echo mysqli_error($conn);
	}
	
}
?>
