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
	__METHOD__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan metodun, metot adı bilgisi değerini döndürür.
	*/
	

	class ExtraEgitim{
		
		function Ornek1(){
			echo __METHOD__;
		}
		
		function Ornek2(){
			echo __METHOD__;
		}
		
	}
	
	$Islem	=	new ExtraEgitim;
	$Islem->Ornek1();
	echo "<br />";
	$Islem->Ornek2();
	
	?>
</body>
</html>