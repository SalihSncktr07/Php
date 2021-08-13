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
	Yapısı :
	
	switch():
		case Koşul:
			Kod blokları
		break;
		default:
			Kod blokları
	endswitch;
	*/
	
	$Deger		=	"Aralık";
	
	switch($Deger):
		case ($Deger == "Mart") or ($Deger == "Nisan") or ($Deger == "Mayıs"):
			echo $Deger . " ayı bir İLKBAHAR ayıdır.";
		break;
		case ($Deger == "Haziran") or ($Deger == "Temmuz") or ($Deger == "Ağustos"):
			echo $Deger . " ayı bir YAZ ayıdır.";
		break;
		case ($Deger == "Eylül") or ($Deger == "Ekim") or ($Deger == "Kasım"):
			echo $Deger . " ayı bir SONBAHAR ayıdır.";
		break;
		case ($Deger == "Aralık") or ($Deger == "Ocak") or ($Deger == "Şubat"):
			echo $Deger . " ayı bir KIŞ ayıdır.";
		break;
		default:
		echo "Girilen değer ( {$Deger} ) bir ay adı değildir.";
	endswitch;
	
	?>
</body>
</html>