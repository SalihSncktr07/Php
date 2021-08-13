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
	crc32()		:	Belirtilecek olan içeriğin crc32 temsilini hesaplayıp bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Sifre		=	"Volkan Alakent";
	$Olustur	=	crc32($Sifre);
	echo $Olustur;
	
	?>
</body>
</html>