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
	date_timestamp_get()		:	Oluşturulmuş olan yeni bir tarih nesnesinin, Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	date_timestamp_set()		:	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan Unix zaman damgası değerini atar ve yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Zaman			=	date_create(); // Yıl-Ay-Gün
	
	date_timestamp_set($Zaman, 345070800);
	
	echo "<pre>";
	print_r($Zaman);
	echo "<pre>";
	
	?>
</body>
</html>