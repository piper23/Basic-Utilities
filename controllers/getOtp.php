<?php
include  "../classFiles/otpGeneration.php";

use otpGenerator as otpGen;


if(isset($_POST)){
	 $email=$_POST['email'];
	$password= $_POST['password'];

	if($email=="root" && $password=="root"){
		echo otpGen\GenerateOTP::GetOTP(4,TRUE)."<br>";
	
	}
}



 ?>