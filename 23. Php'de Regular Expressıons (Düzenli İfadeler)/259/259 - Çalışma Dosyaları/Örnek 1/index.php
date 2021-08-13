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
	s 		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin birden fazla satırı varsa tüm satırların kontrol edilmesini sağlar.
	*/
	
	$Icerik		=	"Merhaba Benim Adım Volkan Alakent,
	Ben Bir PHP Yazılımcısıyım.
	Bana Facebook Üzerinden Ulaşabilirsiniz.";
	$Desen		=	"/.*/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>