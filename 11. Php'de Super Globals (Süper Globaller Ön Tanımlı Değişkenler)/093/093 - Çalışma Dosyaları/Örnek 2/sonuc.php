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
	
	echo "Gelen Dosyanın Adı : " . $_FILES["Dosya"]["name"] . "<br />";
	echo "Gelen Dosyanın MIME Türü : " . $_FILES["Dosya"]["type"] . "<br />";
	echo "Gelen Dosyanın Temp Dizini : " . $_FILES["Dosya"]["tmp_name"] . "<br />";
	echo "Gelen Dosyanın Boyutu (Byte) : " . $_FILES["Dosya"]["size"] . "<br />";
	echo "Gelen Dosyanın Hata Kodu Değeri : " . $_FILES["Dosya"]["error"];
	
	?>
</body>
</html>