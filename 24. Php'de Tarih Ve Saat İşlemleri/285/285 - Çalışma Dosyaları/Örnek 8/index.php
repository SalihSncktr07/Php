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
	
	$Deger	=	checkdate(12, 8, 1980); // 1. Değer : Ay (O'sız), 2. Değer : Gün (O'sız), 3. Değer : Yıl
	
	if($Deger==1){
		echo "Girilen Tarih Değeri (12.8.1980) Geçerlidir.";
	}else{
		echo "Girilen Tarih Değeri (12.8.1980) Geçerli Değildir.";
	}
	
	?>
</body>
</html>