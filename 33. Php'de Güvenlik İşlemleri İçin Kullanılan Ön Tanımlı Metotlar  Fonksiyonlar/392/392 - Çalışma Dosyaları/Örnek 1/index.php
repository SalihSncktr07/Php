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
	sha1()			:	Belirtilecek olan içeriğin sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
	sha1_file()		:	Belirtilecek olan dosyanın sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Sifre		=	"12345678";
	$Olustur	=	sha1($Sifre);
	echo $Olustur;
	
	?>
</body>
</html>