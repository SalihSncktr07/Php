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
	ceil()			:	Herhangi bir ondalıklı sayıyı yukarıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	floor()			:	Herhangi bir ondalıklı sayıyı aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	round()			:	Herhangi bir ondalıklı sayıyı kendisine en yakın tam sayıyı kontrol ederek yukarıya veya aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
	*/
	
	$Deger			=	-8.5;
	
	$DegerYukariYuvarla	=	ceil($Deger);
	$DegerAsagiYuvarla	=	floor($Deger);
	
	echo "Orjinal Değer : " . $Deger . "<br />";
	
	echo "ceil() Metodu İle Yuvarlanmış Değer : " . $DegerYukariYuvarla . "<br />";
	
	echo "floor() Metodu İle Yuvarlanmış Değer : " . $DegerAsagiYuvarla;
	
	?>
</body>
</html>