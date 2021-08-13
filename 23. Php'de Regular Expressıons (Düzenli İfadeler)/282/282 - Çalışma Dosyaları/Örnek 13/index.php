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
	$Desen		=	"/^\w+@[a-z]+\.[a-z]{2,}(.[a-z]{2}|)$/";
	$Sonuc		=	preg_match($Desen, $Deger);
	
	if($Sonuc==1){
		echo "Girilen Değer (" . $Deger . ") Bir Mail'dir.";
	}else{
		echo "Girilen Değer (" . $Deger . ") Bir Mail Değildir.";
	}
	
	?>
</body>
</html>