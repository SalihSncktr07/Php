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
	serialize()		:	Herhangi bir değeri saklanabilir veri türüne dönüştürerek, dönüştürdüğü değeri geriye döndürür.
	unserialize()	:	serialize() metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türündeki değeri eski orjinal haline dönüştürerek, dönüştürdüğü değeri geriye döndürür.
	*/
	
	$Bilgiler		=	'a:5:{s:4:"Isim";s:6:"Volkan";s:7:"Soyisim";s:7:"Alakent";s:5:"Sehir";s:9:"İstanbul";s:3:"Yas";i:38;s:8:"Cinsiyet";s:5:"Erkek";}';
	
	echo $Bilgiler . "<br /><br />";
	
	$Sonuc			=	unserialize($Bilgiler);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre>";

	?>
</body>
</html>