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
	function SEO($Deger){
		$Icerik			=	trim($Deger);
		$Degisecekler	=	array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
		$Degisenler		=	array("c", "c", "g", "g", "i", "i", "o", "o", "s", "s", "u", "u");
		$Icerik			=	str_replace($Degisecekler, $Degisenler, $Icerik);
		$Icerik			=	mb_strtolower($Icerik, "UTF-8");
		$Icerik			=	preg_replace("/[^a-z0-9.]/", "-", $Icerik);
		$Icerik			=	preg_replace("/-+/", "-", $Icerik);
		$Icerik			=	trim($Icerik, "-");
		return $Icerik;
	}
	
	$Urun	=	"2016 BMW 3.18İ BU KM YE YOK 21.700 KM HASARSIZ";
	
	echo "Orjinal Metin : <br />";
	echo $Urun . "<br /><br />";
	
	echo "SEF Link / Permalink Yapısı : <br />";
	echo SEO($Urun);
	
	?>
</body>
</html>