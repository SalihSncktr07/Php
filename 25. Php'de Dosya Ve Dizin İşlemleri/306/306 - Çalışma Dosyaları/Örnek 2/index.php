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
	feof()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinin sonuna kadar okunup okunmadığını tesbit etmek için kullanılır.
	fgets()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri satır satır bularak, bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan satır verileri herhangi bir döngü ile elde edileilir.
	fgetc()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri karakter karakter bularak, bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan karakter verileri herhangi bir döngü ile elde edileilir.
	fread()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve belirtilecek karakter değerlerine bölünmüş içerikleri bularak, bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan ve belirtilecek karakter değerlerine bölünmüş verileri herhangi bir döngü ile elde edileilir.
	fpassthru()	:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve tüm içeriği bir defada bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya		=	"Dosya.txt";
	$DosyaAc	=	fopen($Dosya, "r");
	$Oku		=	fgetc($DosyaAc);
	
	echo $Oku;
	
	fclose($DosyaAc);
	
	?>
</body>
</html>