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
	date_create_from_format()	:	Belirtilecek olan formata göre biçimlendirilmiş tarih değerlerine göre, yeni bir tarih nesnesi dizisi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	date_format()				:	Oluşturulmuş olan yeni bir tarih nesnesini, belirtilecek olan bir formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
	*/
	
	$Zaman		=	date_create_from_format("d-M-Y", "08-Dec-1980"); // 1. Parametre : Sabitler, 2. Parametre : Tarih (Gün-Ayın 3 karakterli Kısa Adı-Yıl)
	
	echo "<pre>";
	print_r($Zaman);
	echo "</pre>";
	
	?>
</body>
</html>