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
	touch()		:	Belirtilecek olan değer doğrultusunda, yeni bir dosya oluşturmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	unlink()	:	Belirtilecek olan değer doğrultusunda, dosya silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	copy()		:	Belirtilecek olan değer doğrultusunda, dosya kopyalamak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	rename()	:	Belirtilecek olan değer doğrultusunda, dosyayı yada dizini yeniden adlandırmak veya taşımak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek içinde kullanılır.
	*/
	
	$Dizin				=	"Dosyalar/";
	$Dosya				=	"Deneme.rar";
	$Birlestir			=	$Dizin.$Dosya;
	
	$YeniDizin			=	"Rarlar/";
	$YeniDosya			=	"Deneme.rar";
	$YeniBirlestir		=	$YeniDizin.$YeniDosya;
	
	$Tasi				=	rename($Birlestir, $YeniBirlestir);	
	
	if($Tasi=="1"){
		echo "Dosya Başarıyla Taşındı.";
	}else{
		echo "Dosya Taşıma İşlemi Sırasında Hata Oluştu.";
	}	
	
	?>
</body>
</html>