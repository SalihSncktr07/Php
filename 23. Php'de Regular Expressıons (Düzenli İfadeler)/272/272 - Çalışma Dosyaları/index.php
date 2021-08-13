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
	\	:	Düzenli ifadelerde ardından gelecek olan karakterin özel bir karakter olmadığını belirtmek için kullanılır.
	*/
	
	$Deger		=	"11 + 111 işleminin sonucu 122'dir.";
	$Desen		=	"/\+/";
	preg_match_all($Desen, $Deger, $Sonuc);
	
	echo "Orjinal İçerik : " . $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>