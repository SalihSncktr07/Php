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
	include()			:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
	include_once()		:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
	require()			:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam edilmez.)
	require_once()		:	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır. (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam edilmez.)
	*/
	
	include_once("Dosya1.php");

	echo "Ana Dosya 1. İçerik<br />";
	
	include_once("Dosya2.php");

	echo "Ana Dosya 2. İçerik<br />";
	
	include_once("Dosya3.php");
	
	?>
</body>
</html>