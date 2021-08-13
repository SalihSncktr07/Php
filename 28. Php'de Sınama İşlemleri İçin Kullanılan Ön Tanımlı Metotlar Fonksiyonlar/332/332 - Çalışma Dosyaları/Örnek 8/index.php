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
	
	$Degerler	=	array("Esya" => "Masa", "Renk" => "Mavi", "Vasita" => "Uçak");
	
	$Kontrol	=	isset($Degerler["Renk"]);
	
	if($Kontrol==true){
		echo 'Degerler adındaki dizi içerisinde Renk anahtarı bulunmaktadır.';
	}else{
		echo 'Degerler adındaki dizi içerisinde Renk anahtarı bulunmamaktadır.';
	}
	
	?>
</body>
</html>