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
	
	echo "Sonuç : " . (5 + (300 - (55 * (4 / 100))));
	
	/*
	İŞLEM ÖNCELİKLERİ ATANMASIYLA OLUŞAN YENİ HESAPLA YÖNTEMİ
	4 / 100 = 0.04
	55 * 0.04 = 2.2
	300 - 2.2 = 297.8
	297.8 + 5 = 302.8
	*/
	
	/*
	GERÇEK HESAPLAMA
	55 * 4 = 220
	220 / 100 = 2.2
	5 + 300 = 305
	305 - 2.2 = 302.8
	*/
	
	?>
</body>
</html>