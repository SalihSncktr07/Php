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
	var_export()	:	Belirtilecek olan harhangi bir değişkenin çözümlenebilir gösterimini bularak, bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır.
	*/
	
	class Deneme {
		
		public $Isim	=	"Volkan";
		public $Soyisim	=	"Alakent";
		
		public function Bilgiler(){
			
			$Tarih	=	2019;
			$Sehir	=	"İstanbul";
			
			$Dondur	=	$Tarih . "<br />" . $Sehir;
			return $Dondur;
		}
		
	}
	
	$Sonuc	=	new Deneme;
	
	echo $Sonuc->Isim . " " . $Sonuc->Soyisim . "<br />";
	echo $Sonuc->Bilgiler(). "<br /><br /><br /><br /><br />";
	
	var_export($Sonuc);
	echo "<br />";
	var_export($Sonuc->Bilgiler());
	
	?>
</body>
</html>