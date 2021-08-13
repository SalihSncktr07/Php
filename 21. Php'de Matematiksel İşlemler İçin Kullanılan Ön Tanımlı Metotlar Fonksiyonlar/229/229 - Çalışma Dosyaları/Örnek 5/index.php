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
	tan()		:	Herhangi bir sayının tanjantını bularak, bulduğu değeri geriye döndürür.
	tanh()		:	Herhangi bir sayının hiperbolik tanjantını bularak, bulduğu değeri geriye döndürür.
	atan()		:	Herhangi bir sayının ark tanjantını radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
	atanh()		:	-1 ila 1 arasındaki herhangi bir sayının hiperbolik ark tanjantını bularak, bulduğu değeri geriye döndürür.
	atan2()		:	Herhangi iki sayının ark tanjantını radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür. (x, y)
	*/
	
	$SayiBirA		=	10;
	$SayiBirB		=	20;
	$SayiIkiA		=	-5;
	$SayiIkiB		=	-8;
	$SayiUcA		=	12.5;
	$SayiUcB		=	4.5;
	
	$HesaplaBir		=	atan2($SayiBirA, $SayiBirB);
	$HesaplaIki		=	atan2($SayiIkiA, $SayiIkiB);
	$HesaplaUc		=	atan2($SayiUcA, $SayiUcB);
	
	echo "x = " . $SayiBirA . " y = " . $SayiBirB . " ark tanjantı radyan değeri : " . $HesaplaBir . "<br />";
	echo "x = " . $SayiIkiA . " y = " . $SayiIkiB . " ark tanjantı radyan değeri : " . $HesaplaIki . "<br />";
	echo "x = " . $SayiUcA . " y = " . $SayiUcB . " ark tanjantı radyan değeri : " . $HesaplaUc;
	
	?>
</body>
</html>