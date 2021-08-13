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
	
	$Deger		=	"http://www.extraegitim.com";
	$Desen		=	"/(?:http:\/\/)?([^\/]+)/";
	$Sonuc		=	preg_match($Desen, $Deger);
	
	if($Sonuc==1){
		echo "Girilen Değer (" . $Deger . ") Bir URL'dir.";
	}else{
		echo "Girilen Değer (" . $Deger . ") Bir URL Değildir.";
	}
	
	?>
</body>
</html>