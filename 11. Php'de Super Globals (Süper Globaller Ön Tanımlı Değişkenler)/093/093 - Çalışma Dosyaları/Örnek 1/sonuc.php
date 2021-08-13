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
	$_FILES	:	Http (Hyper Text Transfer Protocol) (hiper metin transferi protokolü) server’ına (sunucusuna) herhangi bir dosya yükleme işlemi esnasında, ilgili dosya verilerine ulaşılabilme imkanı tanır.
	*/
	
	$GelenDosya		=	$_FILES["Dosya"];
	
	echo "<pre>";
	print_r($GelenDosya);
	echo "</pre>";
	
	?>
</body>
</html>