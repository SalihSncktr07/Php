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
	
	$DegerBir		=	5;
	$DegerIki		=	300;
	$DegerUc		=	55;
	$DegerDort		=	4;
	$DegerBes		=	100;
	
	$Sonuc			=	$DegerBir + $DegerIki - $DegerUc * $DegerDort / $DegerBes;
	
	echo $Sonuc;
	
	/*
	YANLIŞ HESAPLA (Hesaplamalar soldan sağa gitmez, işlem önceliklerine tabi tutulurlar.)
	5 + 300 = 305
	305 - 55 = 250
	250 * 4 = 1000
	1000 / 100 = 10
	*/
	
	/*
	DOĞRU HESAPLAMA
	55 * 4 = 220
	220 / 100 = 2.2
	5 + 300 = 305
	305 - 2.2 = 302.8
	*/
	
	?>
</body>
</html>