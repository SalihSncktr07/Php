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
	chmod()		:	Belirtilecek olan değer ve izin doğrultusunda, ilgili kaynağın dosya / dizin erişim izinlerini ayarlamak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$Dosya			=	"Ornek.txt";
	
	chmod($Dosya, 0777);
	
	$Izinler		=	fileperms($Dosya);
	
	echo "Erişim İzni Değeri : " . $Izinler . "<br />";
	
	$Bicimlendir	=	substr(sprintf("%o", $Izinler), -4);
	
	echo "Erişim İzni Değeri : " . $Bicimlendir;
	
	?>
</body>
</html>