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
	
	$DegerBir		=	1;
	$DegerIki		=	-1;
	$DegerUc		=	0.8;
	
	$SonucBir		=	acos($DegerBir);
	$SonucIki		=	acos($DegerIki);
	$SonucUc		=	acos($DegerUc);
	
	echo $DegerBir. " sayısının ark kosinüsünü radyan değeri : " . $SonucBir . "<br />";
	echo $DegerIki. " sayısının ark kosinüsünü radyan değeri : " . $SonucIki . "<br />";
	echo $DegerUc. " sayısının ark kosinüsünü radyan değeri : " . $SonucUc;
	
	?>
</body>
</html>