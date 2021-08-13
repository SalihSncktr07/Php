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
	?:		=	ternary operatörü (Üçlü operatör)
	
	Yapısı :
	(Koşul veya Koşullar) ? Geçerli ifade : Geçersiz ifade ;
	*/
	
	$Deger1		=	10;
	$Deger2		=	20;
	$Deger3		=	30;
	
	$Dogru		=	"Tüm Değerler Eşleşiyor.";
	$Yanlis		=	"Değer veya Değerler Eşleştirilemedi.";
	
	$Sonuc		=	 (($Deger1==10) and ($Deger2==20) and ($Deger3==30)) ? $Dogru : $Yanlis;
	
	echo $Sonuc;
	
	?>
</body>
</html>