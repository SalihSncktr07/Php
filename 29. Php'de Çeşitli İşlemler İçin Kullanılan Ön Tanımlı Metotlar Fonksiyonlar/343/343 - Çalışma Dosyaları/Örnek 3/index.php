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
	get_included_files()	:	Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path'ini (yolunu) ve isimlerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_required_files()	:	Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path'ini (yolunu) ve isimlerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	print_r(get_required_files());
	
	?>
</body>
</html>