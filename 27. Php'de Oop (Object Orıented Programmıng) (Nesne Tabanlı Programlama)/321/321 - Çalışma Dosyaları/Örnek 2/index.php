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
	__construct()		:	Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
	__destruct()		:	Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
	*/
	
	class Deneme{
		
		public function __construct(){
			echo "Sınıf Çalıştı ve Yapıcı Metod Devreye Girdi.<br />";
		}
		
		public function __destruct(){
			echo "Sınıf İçerisindeki Tüm Özellik ve Metotların Çalışması Tamamlandığı İçin Yıkıcı Metod Devreye Girdi.";
		}
		
		public $Isim	=	"Volkan";
		public $Soyisim = 	"Alakent";
		
		public function Yaz(){
			$Metin	=	"A'dan Z'ye PHP Görsel Eğitim Seti";
			return $Metin;
		}
		
	}
	
	$IslemYap	=	new Deneme;
	echo $IslemYap->Isim . " " . $IslemYap->Soyisim . " " . $IslemYap->Yaz() . "<br />";
	
	?>
</body>
</html>