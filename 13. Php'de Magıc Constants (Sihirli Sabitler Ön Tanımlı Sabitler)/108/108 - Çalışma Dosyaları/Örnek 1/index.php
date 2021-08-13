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
	__TRAIT__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan özelliğin, özellik adı bilgisi değerini döndürür.
	*/
	
	trait OzellikBir{
		function YazBir(){
			echo __TRAIT__;
		}
	}
	
	trait OzellikIki{
		function YazIki(){
			echo __TRAIT__;
		}
	}
	
	class ExtraEgitim{
		use OzellikBir;
		use OzellikIki;
	}
	
	$Islem	=	new ExtraEgitim;
	$Islem->YazBir();
	echo "<br />";
	$Islem->YazIki();

	?>
</body>
</html>