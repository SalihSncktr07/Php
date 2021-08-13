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
	getenv()	:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkeninin değerini bularak, bulduğu değeri geriye döndürür.
	putenv()	:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkenine, belirtilecek olan değeri atamak için kullanılır.
	*/
	
	echo "<pre>";
	print_r(getenv());
	echo "</pre>";
	
	echo "<br /><br /><br />";
	
	putenv("ISIM=Volkan");
	putenv("SOYISIM=Alakent");
	putenv("BILGI=A'dan Z'ye PHP Görsel Eğitim Seti");
	putenv("FIRMA=Extra Eğitim");
	
	echo "ISIM Adındaki Ortam Değişkeninin Değeri : " . getenv("ISIM") . "<br />";
	echo "SOYISIM Adındaki Ortam Değişkeninin Değeri : " . getenv("SOYISIM") . "<br />";
	echo "BILGI Adındaki Ortam Değişkeninin Değeri : " . getenv("BILGI") . "<br />";
	echo "FIRMA Adındaki Ortam Değişkeninin Değeri : " . getenv("FIRMA");

	?>
</body>
</html>