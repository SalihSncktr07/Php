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
	curl_version()		:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan libcurl kütüphanesinin tüm bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Degerler	=	curl_version();
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	?>
</body>
</html>