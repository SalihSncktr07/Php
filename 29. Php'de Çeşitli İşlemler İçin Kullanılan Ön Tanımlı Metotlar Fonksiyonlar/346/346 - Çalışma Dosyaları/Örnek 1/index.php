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
	disk_total_space()		:	Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda toplam disk kapasitesinin değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
	disk_free_space()		:	Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda kalan kullanılabilir disk kapasitesinin değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
	memory_get_usage()		:	Çalışmakta olan PHP dosyası için sistemden ayrılan memory (hafıza) miktarı değerini byte cinsinden bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger	=	disk_total_space("/");
	
	echo "Server'ın (sunucunun) toplam disk kapasitesi : " . $Deger . " Byte";
	
	?>
</body>
</html>