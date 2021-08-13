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
	
	$Bilgiler		=	array("Isim" => "Volkan", "Soyisim" => "Alakent", "Sehir" => "İstanbul", "Yas" => 38);
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "<pre><br /><br />";
	
	$Sonuc			=	serialize($Bilgiler);
	
	echo $Sonuc;
	
	?>
</body>
</html>