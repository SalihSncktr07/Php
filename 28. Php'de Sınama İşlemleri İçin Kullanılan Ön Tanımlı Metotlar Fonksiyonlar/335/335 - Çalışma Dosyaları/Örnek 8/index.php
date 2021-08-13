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
	function_exists()	:	Belirtilecek olan fonksiyonun varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	class_exists()		:	Belirtilecek olan class'ın (sınıfın) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	method_exists()		:	Belirtilecek olan class (sınıf) içerisinde, belirtilecek olan metodun (fonksiyonun) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	property_exists()	:	Belirtilecek olan class (sınıf) içerisinde, belirtilecek olan özelliğin (değişkenin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	trait_exists()		:	Belirtilecek olan class'a (sınıfa) ait, belirtilecek olan trait'in (özelliğin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	interface_exists()	:	Belirtilecek olan class'a (sınıfa) ait, belirtilecek olan interface'in (arayüzün) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_subclass_of()	:	Belirtilecek olan class'dan (sınıfdan) türeyen, belirtilecek olan sub class'ın (alt sınıfın / mirasının) varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_a()				:	Belirtilecek olan class'ın (sınıfın) nesnel örneğini varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	class Ornek {

	}
	
	$Islem	=	new Ornek;
	
	if(property_exists($Islem, "Isim")){
		echo "Isim adında özellik bulunmaktadır.";
	}else{
		echo "Isim adında özellik bulunmamaktadır.";
	}
	
	?>
</body>
</html>