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
	
	$Deger		=	"Merhaba Benim Adım Volkan Alakent 34 XXX 34 Numaralı Plaka Benim Aracımındır.";
	$Desen		=	"/ \d{2}\s?[A-Z]{1,3}\s?\d{2,4} /";
	preg_match($Desen, $Deger, $Sonuc);
	
	echo $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>