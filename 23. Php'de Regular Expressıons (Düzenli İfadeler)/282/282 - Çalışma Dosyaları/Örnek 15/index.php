<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<?php
	
	$Deger		=	"info@extraegitim.com";
	$Desen		=	"/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
	$Sonuc		=	preg_match($Desen, $Deger);
	
	if($Sonuc==1){
		echo "Girilen Değer (" . $Deger . ") Bir Mail'dir.";
	}else{
		echo "Girilen Değer (" . $Deger . ") Bir Mail Değildir.";
	}
	
	?>
</body>
</html>