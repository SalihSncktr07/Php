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
	
	$Deger		=	"Merhaba Benim Adım Volkan Alakent Bana 0535 225 51 44 Numaralı Hattımdan Ulaşabilirsiniz.";
	$Desen		=	"/ 0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2} /";
	preg_match($Desen, $Deger, $Sonuc);
	
	echo $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>