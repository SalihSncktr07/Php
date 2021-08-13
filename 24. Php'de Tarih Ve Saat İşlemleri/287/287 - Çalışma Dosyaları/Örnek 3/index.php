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
	time()			:	Geçerli zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	mktime()		:	Belirtilecek olan zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	microtime()		:	Geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
	gettimeofday()	:	Geçerli zamanın Unix zaman damgası, mikro saniye, yaz saati uygulaması ve Greenwich batısı değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca istenirse string olarak da geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$ZamanDamgasi	=	mktime(15, 20, 55, 12, 8, 1980); // Saat, Dakika, Saniye, Ay, Gün, Yıl
	
	echo "Zaman Damgası : " . $ZamanDamgasi . "<br />";
	
	$GeriCevir		=	date("d.m.Y H.i.s", $ZamanDamgasi);
	
	echo "Tam Tarih : " . $GeriCevir;

	?>
</body>
</html>