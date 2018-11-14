<?php

if(isset($_REQUEST['submit'])){
	
	$conn = new MySQLi("localhost","root","","Signup");
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	

	$query = "Select flag from userdata where email = '$email' AND password = '$password'";
	
	$flag = mysqli_fetch_array($query);
	
	if($flag['flag']){
		
		$usertype = "admin";
		echo $usertype;
	}
	else{
		$usertype = "end user";
		echo $usertype;
	}
	
	if($conn->query($query)){
		
		echo "Successfully logged in";
	}
	else{
		
		echo "Error occurred";
		echo mysqli_error($conn);
	}
	
}
?>
