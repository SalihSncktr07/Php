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
	
	$DegerBir	=	1000;
	$DegerIki	=	132;
	$DegerUc	=	26;
	
	$Sonuc		=	$DegerBir % $DegerIki % $DegerUc;	// 1000 sayısı 132 sayısına 7 defa tam olarak bölünebildiği için; Formül : 132 * 7 = 924     1000 - 924 = 76 
														// 76 sayısı 26 sayısına 2 defa tam olarak bölünebildiği için; Formül : 26 * 2 = 52     76 - 52 = 24
	
	echo $DegerBir . " % " . $DegerIki . " % " . $DegerUc . " = " . $Sonuc . "<br />";
	
	$SonDeger	=	7;
	
	echo $Sonuc . " % " . $SonDeger . " = ";
	
	$Sonuc		%=	$SonDeger;	// 24 sayısı 7 sayısına 3 defa tam olarak bölünebildiği için; Formül : 7 * 3 = 21     24 - 21 = 3
	
	echo $Sonuc;
	
	?>
</body>
</html>