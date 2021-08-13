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
	extends		:	Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
	final		:	En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metod adı kullanılamaz.
	*/
	
	class Islemeler {
		
		public $IsimSoyisim;
		public $AylikGelir;
		public $AylikGider;
		
		public function IsimGoster($AdSoyad){
			$this->IsimSoyisim	=	$AdSoyad;
		}
		
		public function GelirGoster($GelirTutari){
			$this->AylikGelir	=	$GelirTutari;
		}
		
		public function GiderGoster($GiderTutari){
			$this->AylikGider	=	$GiderTutari;
		}
		
		public function GelirGiderHesaplamasi(){
			$NetKazanilan		=	$this->AylikGelir - $this->AylikGider;
			return $NetKazanilan;
		}
		
		public function AltiAylikKazanilan(){
			$AltiAylikNetKazanilan	=	($this->AylikGelir - $this->AylikGider) * 6;
			return $AltiAylikNetKazanilan;
		}
		
		public function YillikKazanilan(){
			$YillikNetKazanilan	=	($this->AylikGelir - $this->AylikGider) * 12;
			return $YillikNetKazanilan;
		}
		
	}
	
	class ElemanlarDahili extends Islemeler { }
	
	class ElemanlarHarici extends Islemeler { }
	
	$BirinciKisi		=	new ElemanlarDahili;	
	$BirinciKisi->IsimGoster("Volkan Alakent");
	$BirinciKisi->GelirGoster("10000");
	$BirinciKisi->GiderGoster("4000");
	
	echo "Volkan Alakent isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir. Aylık net kazancı " . $BirinciKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Volkan Alakent isimli şahsın 6 aylık net kazancı " . $BirinciKisi->AltiAylikKazanilan(). " TL'dir. Yıllık net kazancı " . $BirinciKisi->YillikKazanilan(). " TL'dir.<br /><br />";
	
	$IkinciKisi		=	new ElemanlarDahili;	
	$IkinciKisi->IsimGoster("Onur Tatlı");
	$IkinciKisi->GelirGoster("5000");
	$IkinciKisi->GiderGoster("500");
	
	echo "Onur Tatlı isimli şahsın aylık geliri 5000 TL'dir. Aylık gideri 500 TL'dir. Aylık net kazancı " . $IkinciKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Onur Tatlı isimli şahsın 6 aylık net kazancı " . $IkinciKisi->AltiAylikKazanilan(). " TL'dir. Yıllık net kazancı " . $IkinciKisi->YillikKazanilan(). " TL'dir.<br /><br />";
	
	$UcuncuKisi		=	new ElemanlarHarici;	
	$UcuncuKisi->IsimGoster("Ümit Okudan");
	$UcuncuKisi->GelirGoster("6000");
	$UcuncuKisi->GiderGoster("1300");
	
	echo "Ümit Okudan isimli şahsın aylık geliri 6000 TL'dir. Aylık gideri 1300 TL'dir. Aylık net kazancı " . $UcuncuKisi->GelirGiderHesaplamasi() . " TL'dir.<br />";
	echo "Ümit Okudan isimli şahsın 6 aylık net kazancı " . $UcuncuKisi->AltiAylikKazanilan(). " TL'dir. Yıllık net kazancı " . $UcuncuKisi->YillikKazanilan(). " TL'dir.<br /><br />";
	
	?>
</body>
</html>