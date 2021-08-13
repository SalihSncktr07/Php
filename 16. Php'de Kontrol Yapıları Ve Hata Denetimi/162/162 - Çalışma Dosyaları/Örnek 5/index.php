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
	switch		=	Koşul başlat.
	case		=	Koşul kontrol et.
	break		=	Koşul kontrolünü sonlandır.
	default		=	Koşul olumsuzlukları sonucu.
	
	Yapısı :
	
	switch(Koşul){
		case Kontrol ifadesi:
			Kod blokları
		break;
		default:
			Kod blokları
	}
	
	*/
	
	$AyAdi	=	"Kasım";
	
	switch($AyAdi){
		case $AyAdi == "Ocak":
			echo $AyAdi . " ayı 1. aydır.";
		break;
		case $AyAdi == "Şubat":
			echo $AyAdi . " ayı 2. aydır.";
		break;
		case $AyAdi == "Mart":
			echo $AyAdi . " ayı 3. aydır.";
		break;
		case $AyAdi == "Nisan":
			echo $AyAdi . " ayı 4. aydır.";
		break;
		case $AyAdi == "Mayıs":
			echo $AyAdi . " ayı 5. aydır.";
		break;
		case $AyAdi == "Haziran":
			echo $AyAdi . " ayı 6. aydır.";
		break;
		case $AyAdi == "Temmuz":
			echo $AyAdi . " ayı 7. aydır.";
		break;
		case $AyAdi == "Ağustos":
			echo $AyAdi . " ayı 8. aydır.";
		break;
		case $AyAdi == "Eylül":
			echo $AyAdi . " ayı 9. aydır.";
		break;
		case $AyAdi == "Ekim":
			echo $AyAdi . " ayı 10. aydır.";
		break;
		case $AyAdi == "Kasım":
			echo $AyAdi . " ayı 11. aydır.";
		break;
		case $AyAdi == "Aralık":
			echo $AyAdi . " ayı 12. aydır.";
		break;
		default:
			echo $AyAdi . " bir ay adı değildir.";
	}
	
	?>
</body>
</html>