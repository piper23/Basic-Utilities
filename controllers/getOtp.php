<?php
include  "../classFiles/otpGeneration.php";

use otpGenerator as otpG;

if(isset($_POST)){
	 $_POST['email'];
	 $_POST['password'];

echo otpG\GenerateOTP::GenerateCharacter(0,TRUE);

}



 ?>