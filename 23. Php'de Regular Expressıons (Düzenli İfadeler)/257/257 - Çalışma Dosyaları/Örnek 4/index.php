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
	u 		:	Düzenli ifade doğrultusunda kontrol edilecek olan içeriğin, Unicode (evrensel kod) tanımlaması ile kontrol edilmesini sağlar.
	*/
	
	$Metin		=	"привет";
	$Desen		=	"//u";
	$Sonuc		=	preg_split($Desen, $Metin);
	
	echo "Orjinal Metin : " . $Metin . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>