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
	curl_getinfo()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	curl_error()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun olası bir hata ile karşılaşması durumunda hata değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Oturum		=	curl_init("https://www.extraegitim.com");
	curl_exec($Oturum);
	$Bilgiler	=	curl_getinfo($Oturum);
	curl_close($Oturum);
	echo "<pre>";
	print_r($Bilgiler);
	echo "</pre>";
	
	?>
</body>
</html>