<?php 

function create_password($password){
	// Create Salt String ->Store In DataBase
	$salt =uniqid(mt_rand(), true);
	// Create Password with MD5 And Salt
	$password =md5($salt.$password);
	//Return salt and password;
	return array($salt, $password);
}
function decrypt_password($salt,$password,$dbpassword){
	//Crete Password from input and salt from database
	$password =md5($salt.$password);
	// Check If Password in database match Password Just input
	if($password==$dbpassword){
		return true;
	}
	return false;
}

 ?>