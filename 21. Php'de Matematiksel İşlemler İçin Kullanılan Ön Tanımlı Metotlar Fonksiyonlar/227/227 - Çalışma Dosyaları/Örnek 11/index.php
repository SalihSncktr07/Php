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
	sin()		:	Herhangi bir sayının sinüsünü bularak, bulduğu değeri geriye döndürür.
	sinh()		:	Herhangi bir sayının hiperbolik sinüsünü bularak, bulduğu değeri geriye döndürür.
	asin()		:	-1 ila 1 arasındaki herhangi bir sayının ark sinüsünü radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
	asinh()		:	Herhangi bir sayının hiperbolik ark sinüsünü bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger		=	-2;
	
	$Sonuc		=	asinh($Deger);
	
	echo "Sayı Değeri : " . $Deger . "<br />";
	echo $Deger. " sayının hiperbolik ark sinüsü : " . $Sonuc;
	
	?>
</body>
</html>