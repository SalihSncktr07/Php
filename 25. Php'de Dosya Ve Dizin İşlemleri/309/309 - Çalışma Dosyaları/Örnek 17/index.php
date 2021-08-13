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
	fwrite()		:	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
	fputs()			:	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
	ftruncate()		:	Belirtilecek olan dosya verisinin, belirtilecek olan karakter numarasından sonraki tüm karakterleri silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$Dosya		=	"Belge.txt";
	$DosyaAc	=	fopen($Dosya, "a");
	
	ftruncate($DosyaAc, 26);
	
	fclose($DosyaAc);
	
	?>
</body>
</html>