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
	{x,}	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin x defa yada daha fazla tekrarlanmış olması gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"Volkan Alakent - Extra Eğitim -- A'dan Z'ye PHP7 Görsel Eğitim Seti --- 2018";
	$Desen		=	"/-{2,}/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>