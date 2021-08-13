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
	$DegerUc	=	3;
	
	$Sonuc		=	$DegerBir % $DegerIki % $DegerUc;	// 1000 sayısı 132 sayısına 7 defa tam olarak bölünebildiği için; Formül : 132 * 7 = 924     1000 - 924 = 76 
														// 76 sayısı 3 sayısına 25 defa tam olarak bölünebildiği için; Formül : 3 * 25 = 75     76 - 75 = 1 
	
	echo $DegerBir . " % " . $DegerIki . " % " . $DegerUc . " = " . $Sonuc;
	
	?>
</body>
</html>