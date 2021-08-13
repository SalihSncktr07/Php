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
	file_get_contents()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri tek bir defada bularak, bulduğu değeri geriye döndürür.
	file_put_contents()		:	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
		FILE_APPEND			:	Eski içerikler silinmeden yeni içerikler sona eklenir.
	*/
	
	$Icerik		=	"file_put_contents() Eğitim Videosu";
	$Dosya		=	"Ornek.txt";
	file_put_contents($Dosya, $Icerik, FILE_APPEND);
	
	?>
</body>
</html>