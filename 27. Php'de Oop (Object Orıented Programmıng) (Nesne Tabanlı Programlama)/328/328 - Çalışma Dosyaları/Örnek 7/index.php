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
	trait		:	Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
	use			:	Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
	insteadof	:	Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
	as			:	Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
	*/
	
	trait KisiBir {
		
		public $OzellikBir	=	"AAA";

		public function Goster(){
			
			$IsimSoyisim	=	"Volkan Alakent";
			return $IsimSoyisim;
			
		}

	}
	
	trait KisiIki {
		
		public $OzellikIki	=	"BBB";
		
		public function Goster(){
			
			$IsimSoyisim	=	"Onur Tatlı";
			return $IsimSoyisim;
			
		}
		
	}
	
	class Deneme {
		
		use KisiBir, KisiIki { KisiIki::Goster insteadof KisiBir; }
		
	}
	
	$Sonuc	=	new Deneme;
	
	echo $Sonuc->OzellikBir . "<br />";
	echo $Sonuc->OzellikIki . "<br />";
	echo $Sonuc->Goster();
	
	?>
</body>
</html>