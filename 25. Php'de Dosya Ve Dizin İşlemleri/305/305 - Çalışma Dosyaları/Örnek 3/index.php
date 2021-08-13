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
	fopen()		:	Belirtilecek olan dosyayı veya URL'i (Uniform Resource Locator) (Nizami Kaynak Bulucu), belirtilecek olan modda açmak için kullanılır.
		r		:	Okuma amaçlı açar. 
		r+		:	Hem okuma hemde yazma amaçlı açar. 
		w		:	Yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değilse oluşturulur.
		w+		:	Hem okuma hemde yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değilse oluşturulur.
		a		:	Yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değilse oluşturulur.
		a+		:	Hem okuma hemde yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değilse oluşturulur.
		x		:	Yazma amaçlı açar. Dosya mevcut değilse fopen() metodu false değeri döndürerek hata üretir.
		x+		:	Hem okuma hemde yazma amaçlı açar. Dosya mevcut değilse fopen() metodu false değeri döndürerek hata üretir.
	fclose()	:	fopen() metodu ile açılmış olan belirtilecek olan dosyayı veya URL'i (Uniform Resource Locator) (Nizami Kaynak Bulucu) kapatmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$URLAdresi		=	"https://www.extraegitim.com";
	$URLAc			=	fopen($URLAdresi, "r");
	
	if($URLAc){
		echo $URLAdresi . " isimli URL başarıyla açıldı.";
	}else{
		echo $URLAdresi . " isimli URL'in açma işlemi sırasında beklenmeyen bir hata oluştu.";
	}
	
	fclose($URLAc);
	
	?>
</body>
</html>