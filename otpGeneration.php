<?php 

 class GenerateOTP{
 

  	public static function GenerateCharacter($var){
  	$baseVariable = date("Ymdhis");
	$string_shuffled = str_shuffle($baseVariable);
    $password = substr($string_shuffled, 1, $var);
	echo $password;
  	}
    
 }



echo GenerateOTP::GenerateCharacter(4);
?>