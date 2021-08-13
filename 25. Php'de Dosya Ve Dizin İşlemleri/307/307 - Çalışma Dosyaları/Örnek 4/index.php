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
	ftell() 	:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde okumaya hazır bulunan konumu bularak, bulduğu değeri geriye döndürür.
	fseek()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde okumaya hazır bulunan konumu değiştirerek, değiştirdiği değeri geriye döndürür.
	rewind()	:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde değiştirilmiş olan okumaya hazır bulunan konumu sıfırlamak / varsayılan haline döndürmek için kullanılır.
	*/
	
	$Dosya		=	"Dosya.txt";
	$DosyaAc	=	fopen($Dosya, "r");
	
	fseek($DosyaAc, 16);
	
	$Konum		=	ftell($DosyaAc);
	
	echo "Okumaya hazır bulunan konum : " . $Konum . "<br />";
	
	$Oku		=	fgets($DosyaAc);
	
	echo $Oku;
	
	fclose($DosyaAc);
	
	?>
</body>
</html>