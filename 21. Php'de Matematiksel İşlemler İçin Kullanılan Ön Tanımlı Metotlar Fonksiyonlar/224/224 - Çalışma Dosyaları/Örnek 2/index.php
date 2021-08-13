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
	intdiv()	:	Herhangi bir sayının belirtilecek olan sayı değerine tam olarak kaç defa bölünebildiğini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger1		=	124.55;
	$Deger2		=	5.12;
	
	$Sonuc		=	intdiv($Deger1, $Deger2);
	
	echo $Deger1 . " sayısı " . $Deger2 . " sayısına " . $Sonuc . " defa tam olarak bölünebilir.";
	
	?>
</body>
</html>