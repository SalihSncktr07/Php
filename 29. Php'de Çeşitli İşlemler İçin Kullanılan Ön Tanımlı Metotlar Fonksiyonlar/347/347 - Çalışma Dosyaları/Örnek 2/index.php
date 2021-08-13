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
	zend_version()		:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan zend motorunun sürüm numarası değerini bularak, bulduğu değeri geriye döndürür.
	phpversion()		:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan PHP sisteminin sürüm numarası değerini bularak, bulduğu değeri geriye döndürür.
	sys_get_temp_dir()	:	Kullanılmakta olan server'da (sunucuda) çalışmakta olan PHP sisteminde kullanılan temp (geçici) dizinin path (yol) değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	echo "Server'ın çalışmakta olan PHP sistemi sürümü : " . phpversion();
	
	?>
</body>
</html>