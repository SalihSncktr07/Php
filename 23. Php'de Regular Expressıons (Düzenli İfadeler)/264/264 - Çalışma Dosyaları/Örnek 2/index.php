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
	{x}		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin x defa tekrarlanmış olması gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"Alfabenin ilk harfi a ile başlar. Alfabenin ilk harfi aa ile başlar. Alfabenin ilk harfi aaa ile başlar. Alfabenin ilk harfi aaaa ile başlar. Alfabenin ilk harfi aaaaa ile başlar.";
	$Desen		=	"/a{4}/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>