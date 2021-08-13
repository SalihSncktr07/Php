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
	__CLASS__	:	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıfın, sınıf adı bilgisi değerini döndürür.
	*/
	
	class Deger{
		function Deneme(){
			$Sonuc	=	__CLASS__;;
			echo $Sonuc;
		}
	}
	
	$Islem	=	new Deger;
	$Islem->Deneme();
	
	?>
</body>
</html>