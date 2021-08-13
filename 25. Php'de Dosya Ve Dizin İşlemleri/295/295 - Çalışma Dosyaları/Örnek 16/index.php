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
	
	echo "İlk Satır.<br />";
	
	require_once("Dosya1.php");
	
	echo "Ara Satır.<br />";

	require_once("Deneme.php");
	
	echo "Son Satırlar.<br />";
	echo "Son Satırlar.<br />";
	echo "Son Satırlar.<br />";
	echo "Son Satırlar.<br />";
	echo "Son Satırlar.<br />";
	
	?>
</body>
</html>