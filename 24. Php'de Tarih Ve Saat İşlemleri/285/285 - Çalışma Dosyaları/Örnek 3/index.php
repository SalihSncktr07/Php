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
	date()			:	Tarih ve saat bilgilerini bularak, bulduğu değeri geriye döndürür. Ayrıca tarih ve saat bilgilerini isteğe bağlı olarak biçimlendirmek içinde kullanılır.
	checkdate()		:	Belirtilecek olan zamani Gregoryen (Miladi) takvimine göre doğrulamasını yaparak, doğrulama sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$Saat	=	date("H:i:s");
	
	echo "Saat : " . $Saat;
	
	?>
</body>
</html>