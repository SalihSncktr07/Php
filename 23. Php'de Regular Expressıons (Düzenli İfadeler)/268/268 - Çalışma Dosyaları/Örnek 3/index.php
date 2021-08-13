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
	*	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin 0 defa yada daha fazla tekrarlanmış olması gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"1-11-111-1111-11111-111111-1111111-11111111-111111111-1111111111";
	$Desen		=	"/1*/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>