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
	()		:	Düzenli ifadelerde grup tanımlamak için kullanılır.
	(x|y)	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin x yada y karakterlerinden herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Deger		=	"Benim Adım Volkan Alakent'dir ve Ben Bir PHP Yazılımcısıyım.";
	$Desen		=	"/(Volkan)/";
	preg_match_all($Desen, $Deger, $Sonuc);
	
	echo "Metnin Orjinal Hali : " . $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>