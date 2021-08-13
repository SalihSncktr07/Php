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
	
	$SayiBir		=	3;
	$SayiIki		=	-2;
	$SayiUc			=	1.5;
	
	$HesaplaBir		=	tanh($SayiBir);
	$HesaplaIki		=	tanh($SayiIki);
	$HesaplaUc		=	tanh($SayiUc);
	
	echo $SayiBir . " sayısının hiperbolik tanjantı : " . $HesaplaBir . "<br />";
	echo $SayiIki . " sayısının hiperbolik tanjantı : " . $HesaplaIki . "<br />";
	echo $SayiUc . " sayısının hiperbolik tanjantı : " . $HesaplaUc;
	
	?>
</body>
</html>