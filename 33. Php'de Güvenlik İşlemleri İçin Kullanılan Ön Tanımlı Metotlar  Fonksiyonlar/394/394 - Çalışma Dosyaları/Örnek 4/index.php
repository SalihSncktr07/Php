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
	str_rot13()		:	Belirtilecek olan içeriğin ROT13 kodlaması değerini bularak, bulduğu değeri geriye döndürür. Ayrıca ROT13 kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	*/
	
	$Deger		=	"Extra Eğitim & Volkan Alakent & A'dan Z'ye PHP Görsel Eğitim Seti & 2019";
	echo $Deger . "<br />";
	
	$Olustur	=	str_rot13($Deger);
	echo $Olustur . "<br />";
	
	$GeriCoz	=	str_rot13($Olustur);
	echo $GeriCoz;
	
	?>
</body>
</html>