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
	
	class Deneme{
		
		private function TestBir($Isim, $Soyisim){
			
			$Metin = "Merhaba " . $Isim . " " . $Soyisim . " Nasılsın ?";
			echo $Metin;
			
		}
		
		protected function TestIki($Isim, $Soyisim){
			
			$Metin = "Merhaba " . $Isim . " " . $Soyisim . " Nasılsın ?";
			echo $Metin;
			
		}
		
	}
	
	$Islem	= new Deneme;
	
	$Islem->TestBir("Volkan", "Alakent");
	
	$Islem->TestIki("Volkan", "Alakent");
	
	?>
</body>
</html>