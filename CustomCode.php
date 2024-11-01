<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
global $InputField3;


if (isset($InputField3) && $InputField3 !=''){
	$phrasex=$InputField3;
	echo $phrasex.' ';
} 
else{
	$phrasex='';
}


echo $_SERVER["REMOTE_ADDR"];

?>


