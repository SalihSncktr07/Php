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
	
	class Hesap {
		
		private $Sonuc	=	0;
		
		function __construct($SayiDegeri){
			
			$this->Sonuc	=	$SayiDegeri;
			
		}
		
		public function Toplama($ToplamaIcinSayiDegeri){
			
			$this->Sonuc	+=	$ToplamaIcinSayiDegeri;
			return $this;
			
		}
		
		public function Cikartma($CikartmaIcinSayiDegeri){
			
			$this->Sonuc	-=	$CikartmaIcinSayiDegeri;
			return $this;
			
		}
		
		public function Carpma($CarpmaIcinSayiDegeri){
			
			$this->Sonuc	*=	$CarpmaIcinSayiDegeri;
			return $this;
			
		}
		
		public function Bolme($BolmeIcinSayiDegeri){
			
			$this->Sonuc	/=	$BolmeIcinSayiDegeri;
			return $this;
			
		}
		
		public function Goster(){
			echo $this->Sonuc . "<br />";
			return $this->Sonuc;
			
		}
		
	}
	
	$IslemBir	=	new Hesap(1000);
	$IslemBir->Toplama(500)->Cikartma(300)->Carpma(2)->Bolme(8)->Goster();
	
	$IslemIki	=	new Hesap(5000);
	$IslemIki->Carpma(2)->Bolme(4)->Goster() . "<br />";
	
	$IslemUc	=	new Hesap(1000000);
	$IslemUc->Bolme(10)->Carpma(2)->Goster() . "<br />";
	
	$IslemUc	=	new Hesap(100);
	$IslemUc->Bolme(2)->Bolme(2)->Bolme(5)->Goster() . "<br />";
	
	?>
	
</body>
</html>