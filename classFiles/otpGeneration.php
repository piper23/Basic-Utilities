<?php 
namespace otpGenerator;

 class GenerateOTP{
 
 //@author Reuben Gomes
// call GenerateCharacter if no parameters return will be 6 Numeric Characters
// 1st parmeter is length of OTP to be generated NUMERIC
// 2nd parameter Should be Set to TRUE IF you want to generate ALPHA NUMERIC pass 1st param as "" if you want to generate 6 char

private static $StrigCount=6; // Default Value

  	static function GenerateCharacter(){
  		$arguments = func_get_args();
  		$baseVariable = date("Ymdhis").rand(10000000,99999999);
  		if(isset($arguments[0])){
  			if($arguments[0]!=null && $arguments[0]!="" && $arguments[0]!=0){
  			self::$StrigCount=$arguments[0];
  			}
  		}

  		if(isset($arguments[1])){
  			if($arguments[1]===TRUE){
  				$baseVariable = md5($baseVariable );
  			}
  		}
  	
	$string_shuffled = str_shuffle($baseVariable);
    $otp = substr($string_shuffled, 1, self::$StrigCount);
	echo $otp;
  	}
    
 }




?>