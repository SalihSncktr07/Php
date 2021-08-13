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
	stat()						:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	fstat()						:	fopen() metodu kullanılarak açılmış olan ve belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	clearstatcache()			:	stat() veya fstat() metodu kullanılarak elde edilen ve ön belleğe alınan verileri temizlemek için kullanılır.
	
	stat() ve fstat() Değerleri	:
	
    0		ve		dev	 		=>		Aygıt numarası (Genellikle değeri 2'dir.)
    1		ve		ino			=>		Dosya düğüm numarası (Genellikle değeri 0'dır.)
    2		ve		mode	 	=>		Dosya erişim izinleri (Genellikle değeri 33206)
    3		ve		nlink	 	=>		Bağlantı sayısı (Genellikle değeri 1'dir.)
    4		ve		uid	 		=>		Dosya sahibi ID'si (Genellikle değeri 0'dır.)
    5		ve		gid	 		=>		Dosya sahibi grubu ID'si (Genellikle değeri 0'dır.)
    6		ve		rdev	 	=>		Dosya düğümü aygıtları için aygıt türü (Genellikle değeri 2'dir.)
    7		ve		size	 	=>		Dosya boyutu (Byte cinsinden)
    8		ve		atime	 	=>		Dosya son erişim zamanı. (Unix zaman damgası türünde)
    9		ve		mtime	 	=>		Dosya değiştirilme zamanı. (Unix zaman damgası türünde)
    10		ve		ctime	 	=>		Dosya oluşturulma zamanı. (Unix zaman damgası türünde)
    11		ve		blksize	 	=>		Dosya sistemi için I/O blok boyutu (Genellikle Windows değeri -1'dir.)
    12		ve		blocks	 	=>		Dosya için ayrılmış 512 byte'lık blok boyutu (Genellikle Windows değeri -1'dir.)
	*/
	
	$Dosya		=	"Ornek.zip";
	$Islem		=	stat($Dosya);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	
	clearstatcache();
	
	?>
</body>
</html>