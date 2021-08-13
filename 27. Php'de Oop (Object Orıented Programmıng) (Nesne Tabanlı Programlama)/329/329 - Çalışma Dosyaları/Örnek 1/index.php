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
	
	class Bicimlendir {
		
		public $Yazi;
		public $Stil;
		
		
		public function Metin($MetinDegeri){
			
			$this->Yazi		=	$MetinDegeri;
			return $this;
			
		}
		
		public function Renk($RenkDegeri){
			
			$this->Stil		=	"color:" . $RenkDegeri . "; ";
			return $this;
			
		}
		
		public function Boyut($BoyutDegeri){
			
			$this->Stil		.=	"font-size:" . $BoyutDegeri . "; ";
			return $this;
			
		}
		
		public function Olustur(){
			
			return "<div style='" . $this->Stil . "'>" . $this->Yazi . "</div>";
			
		}
		
	}
	
	$Sonuc	=	new Bicimlendir;
	
	echo $Sonuc->Metin("Volkan Alakent - A'dan Z'ye PHP7 Görsel Eğitim Seti")->Renk("red")->Boyut("20px")->Olustur() . "<br />";
	echo $Sonuc->Metin("Hakan Alakent - A'dan Z'ye Photoshop Görsel Eğitim Seti")->Renk("blue")->Boyut("15px")->Olustur() . "<br />";
	echo $Sonuc->Metin("Onur Tatlı - A'dan Z'ye Java Görsel Eğitim Seti")->Renk("black")->Boyut("10px")->Olustur() . "<br />";
	
	?>
	
</body>
</html>