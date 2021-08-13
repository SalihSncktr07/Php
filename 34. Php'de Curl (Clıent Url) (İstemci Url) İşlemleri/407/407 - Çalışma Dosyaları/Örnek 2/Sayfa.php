<?php
	
$Tarayici	=	$_SERVER["HTTP_USER_AGENT"];

if(!isset($Tarayici)){
	echo "Hoooooop! Sen bir botsun galiba, erişimini engelledim.";
}else{
	echo "Merhaba Hoşgeldin.";
}
?>