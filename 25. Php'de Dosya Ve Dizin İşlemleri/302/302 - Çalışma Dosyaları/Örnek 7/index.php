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
	scandir()		:	Belirtilecek olan dizin içeriğini kontrol ederek, ilgili dizin içerisinde bulunan tüm alt dizin ve dosya bilgilerinden (isimler ve varsa uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	glob()			:	Belirtilecek olan dizin içeriğini, belirtilecek olan kalıba kontrol ederek, ilgili dizin içerisinde bulunan ve kalıpla eşleşen tüm alt dizin ve dosya bilgilerinden (isimler ve varsa uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
		GLOB_MARK		:	Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca her dizin adının sonuna bir \ (ters slash) işareti ekler.
		GLOB_NOSORT		:	Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca dizinlere ve dosyalara sıralama yapmaz.
		GLOB_NOCHECK	:	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, arama kalıbı ile eşleştirerek listeler. Ayrıca arama kalıbı ile hiçbir eşleşme sağlanmıyarsa, arama kalıbı değerini geriye döndürür.
		GLOB_ONLYDIR	:	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri, arama kalıbı ile eşleştirerek listeler.
		GLOB_BRACE		:	Belirtilecek olan genişletilmiş arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, genişletilmiş arama kalıbı ile eşleştirerek listeler.
		GLOB_ERR		:	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, arama kalıbı ile eşleştirerek listeler. Ayrıca listeleme işlemi sırasında herhangi bir hatayla karşılaşılacak olur ise işlem durdurulur. (Örneğin; Okunmayan dizinler vb. gibi.)
	*/
	
	$Dizin		=	"*";
	$Listele	=	glob($Dizin, GLOB_MARK);
	
	echo "<pre>";
	print_r($Listele);
	echo "</pre>";
	
	?>
</body>
</html>