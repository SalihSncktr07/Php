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
	
	$Deger		=	"34 XXX 34";
	$Desen		=	"/^\d{2}\s?[A-Z]{1,3}\s?\d{2,4}$/";
	$Sonuc		=	preg_match($Desen, $Deger);
	
	if($Sonuc==1){
		echo "Girilen Değer (" . $Deger . ") Bir Plakadır.";
	}else{
		echo "Girilen Değer (" . $Deger . ") Bir Plaka Değildir.";
	}
	
	?>
</body>
</html>