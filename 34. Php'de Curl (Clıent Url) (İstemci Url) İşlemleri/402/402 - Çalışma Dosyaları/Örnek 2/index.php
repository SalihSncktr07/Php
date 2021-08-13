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
	curl_init()		:	Yeni bir CURL oturumu başlatmak / tanımlamak için kullanılır.
	curl_exec()		:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunu çalıştırmak için kullanılır.
	curl_close()	:	Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunu sonlandırmak / kapatmak için kullanılır.
	*/
	
	$Oturum		=	curl_init("https://www.turkcell.com.tr");
	curl_exec($Oturum);
	curl_close($Oturum);
	
	?>
</body>
</html>