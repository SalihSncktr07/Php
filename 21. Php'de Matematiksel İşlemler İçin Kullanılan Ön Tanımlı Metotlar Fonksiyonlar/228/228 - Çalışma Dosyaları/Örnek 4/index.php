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
	cos()		:	Herhangi bir sayının kosinüsünü bularak, bulduğu değeri geriye döndürür.
	cosh()		:	Herhangi bir sayının hiperbolik kosinüsünü bularak, bulduğu değeri geriye döndürür.
	acos()		:	-1 ila 1 arasındaki herhangi bir sayının ark kosinüsünü radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
	acosh()		:	Herhangi bir sayının hiperbolik ark kosinüsünü bularak, bulduğu değeri geriye döndürür.
	*/
	
	$DegerBir		=	5;
	$DegerIki		=	-3;
	$DegerUc		=	4.25;
	
	$SonucBir		=	acosh($DegerBir);
	$SonucIki		=	acosh($DegerIki);
	$SonucUc		=	acosh($DegerUc);
	
	echo $DegerBir. " sayısının hiperbolik ark kosinüsü : " . $SonucBir . "<br />";
	echo $DegerIki. " sayısının hiperbolik ark kosinüsü : " . $SonucIki . "<br />";
	echo $DegerUc. " sayısının hiperbolik ark kosinüsü : " . $SonucUc;
	
	?>
</body>
</html>