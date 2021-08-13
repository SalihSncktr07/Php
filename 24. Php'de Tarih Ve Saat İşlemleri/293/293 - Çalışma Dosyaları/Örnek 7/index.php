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
	strftime()		:	Yerel tarih ve saat bilgilerini belirtilecek olan formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
	strtotime()		:	İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Zaman		=	iconv("LATIN5" , "UTF-8", strftime("%d.%m.%Y %T %Z"));
	
	echo $Zaman;
	
	?>
</body>
</html>