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
	defined()	:	Belirtilecek olan sabitin varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	isset()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	empty()		:	Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın daha önceden tanımlanmamış olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$Kontrol	=	isset($Isimler[2]);
	
	if($Kontrol==true){
		echo 'Isimler adındaki dizi içerisinde 2 anahtarı bulunmaktadır.';
	}else{
		echo 'Isimler adındaki dizi içerisinde 2 anahtarı bulunmamaktadır.';
	}
	
	?>
</body>
</html>