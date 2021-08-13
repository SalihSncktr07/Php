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
	[^abc]	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, belirtilen karakterler dışındaki karakterlerden herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Metin	=	"Merhaba Benim Adım Volkan Alakent";
	$Desen	=	"/[^Volkan]/u";
	preg_match_all($Desen, $Metin, $Sonuc);
	
	echo "Metin İçeriği : " . $Metin . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre>";
	
	?>
</body>
</html>