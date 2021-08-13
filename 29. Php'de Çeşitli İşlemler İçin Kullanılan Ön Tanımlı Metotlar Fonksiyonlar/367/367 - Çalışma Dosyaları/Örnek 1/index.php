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
	ord()	:	Belirtilecek olan standart bir karakter değerinin ASCII (American Standart Code For Information Interchange) (Bilgi değişimi için amerikan standart kodlama sistemi) karşılığını bularak, bulduğu değeri geriye döndürür.
	chr()	:	Belirtilecek olan ASCII (American Standart Code For Information Interchange) (Bilgi değişimi için amerikan standart kodlama sistemi) değerinin standart karakter karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Karakter		=	"A";
	$Karsilik		=	ord($Karakter);
	
	echo $Karakter . " : " . $Karsilik;
	
	?>
</body>
</html>