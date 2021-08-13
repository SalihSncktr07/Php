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
	/*
	i 		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin büyük harf / küçük harf ayrımı olmaksızın kontrol edilmesini sağlar.
	*/
	
	$Deger		=	"Merhaba Benim Adım Volkan Alakent, Ben Bir PHP Yazılımcısıyım. Beni Facebook Üzerinden Volkan Alakent Şeklinde Arayarak Bulabilirsiniz.";
	$Desen		=	"/volkan/i";
	$Degistir	=	"Hakan";
	$Sonuc		=	preg_replace($Desen, $Degistir, $Deger);
	
	echo "Orjinal İçerik : " . $Deger . "<br />";
	echo "Değişen İçerik : " . $Sonuc;
	
	?>
</body>
</html>