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
	{x,y}	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin en az x defa yada en fazla y defa tekrarlanmış olması gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"1 11 111 1111 11111 111111 1111111 11111111 111111111 1111111111 11111111111 111111111111 1111111111111 11111111111111 111111111111111 1111111111111111 11111111111111111 111111111111111111 1111111111111111111 11111111111111111111";
	$Desen		=	"/1{10,15}/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal İçerik Metni : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>"
	
	?>
</body>
</html>