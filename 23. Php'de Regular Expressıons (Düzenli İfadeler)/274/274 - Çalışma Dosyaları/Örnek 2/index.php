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
	[x-y]	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, belirtilen karakter aralığından herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Metin		=	"Merhaba Benim Adım Volkan Alakent'dir. Arkadaşımın Adı Ümit'dir.";
	$Desen		=	"/[a-zA-Z]/";
	preg_match_all($Desen, $Metin, $Sonuc);
	
	echo "Metin : " . $Metin . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>