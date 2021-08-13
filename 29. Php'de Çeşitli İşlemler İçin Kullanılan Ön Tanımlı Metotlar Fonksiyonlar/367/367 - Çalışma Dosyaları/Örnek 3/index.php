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
	
	$HarfBir		=	"86";
	$HarfIki		=	"79";
	$HarfUc			=	"76";
	$HarfDort		=	"75";
	$HarfBes		=	"65";
	$HarfAlti		=	"78";
	$KarsilikBir	=	chr($HarfBir);
	$KarsilikIki	=	chr($HarfIki);
	$KarsilikUc		=	chr($HarfUc);
	$KarsilikDort	=	chr($HarfDort);
	$KarsilikBes	=	chr($HarfBes);
	$KarsilikAlti	=	chr($HarfAlti);
	
	echo $KarsilikBir . $KarsilikIki . $KarsilikUc . $KarsilikDort . $KarsilikBes . $KarsilikAlti;
	
	?>
</body>
</html>