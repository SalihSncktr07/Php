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
	
	$Deger		=	"Merhaba Benim Adım Volkan Alakent http://www.extraegitim.com Adresi Benim Site Adresimdir.";
	$Desen		=	"/ (http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]*)+ /";
	preg_match($Desen, $Deger, $Sonuc);
	
	echo $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>