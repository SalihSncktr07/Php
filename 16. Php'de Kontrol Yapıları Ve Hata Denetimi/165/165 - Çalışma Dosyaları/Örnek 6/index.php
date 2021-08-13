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
	
	$Deger		=	1;
	
	$Mesaj1		=	"Merhaba Volkan Nasılsın?";
	$Mesaj2		=	"Merhaba Hakan Nasılsın?";
	
	$Sonuc		=	 ($Deger==1) ? $Mesaj1 : $Mesaj2;
	
	echo $Sonuc;
	
	?>
</body>
</html>