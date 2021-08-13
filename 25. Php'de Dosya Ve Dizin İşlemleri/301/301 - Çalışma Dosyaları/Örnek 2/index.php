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
	mkdir()		:	Belirtilecek olan değer ve izinler doğrultusunda yeni bir dizin oluşturmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	rmdir()		:	Belirtilecek olan değer doğrultusunda dizin silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$Dizin		=	"Resimler";
	
	mkdir($Dizin, 0777);
	
	?>
</body>
</html>