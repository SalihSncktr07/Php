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
	CURLOPT_USERAGENT	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan web browser'ının (tarayıcısının) tanımlanmasını ve ilgili browser'dan (tarayıcıdan) erişim sağlandığını belirtmek için kullanılır.
	CURLOPT_REFERER		:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan referans / gönderen site URL adresini belirtmek için kullanılır.
	*/
	
	$Oturum		=	curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/Sayfa.php");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Oturum, CURLOPT_REFERER, "https://www.google.com.tr");
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	echo $Sonuc;
	
	?>
</body>
</html>