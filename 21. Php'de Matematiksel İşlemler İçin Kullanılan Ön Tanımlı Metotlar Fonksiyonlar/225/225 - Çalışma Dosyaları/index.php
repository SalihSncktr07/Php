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
	hypot()		:	Belirtilecek olan uzunluk değerlerine sahip bir dik üçgenin hipotenüsünü hesaplayarak, bulduğu değeri geriye döndürür.
	*/
	
	$XKenarUzunlugu		=	2;
	$YKenarUzunlugu		=	4;
	
	$Hesapla			=	hypot($XKenarUzunlugu, $YKenarUzunlugu);
	
	echo "x kenar uzunluğu " . $XKenarUzunlugu . " olan ve y kenar uzunluğu " . $YKenarUzunlugu . " olan dik üçgenin hipotenüsünü : " . $Hesapla;
	
	?>
</body>
</html>