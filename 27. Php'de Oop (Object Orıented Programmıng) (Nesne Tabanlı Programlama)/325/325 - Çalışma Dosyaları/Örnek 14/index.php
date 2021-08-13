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
	public		:	Genel. Her yerden erişilebilir.
	private		:	Özel. Yanlızca sınıf içerisinden erişilebilir.
	protected	:	Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
	
	static		:	Sabit. Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.
	
	$this		:	Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
	self::		:	Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
	parent::	:	Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
	*/
	
	class Dersler{
		
		public function AAA(){
			$Icerik		=	"A'dan Z'ye PHP7 Eğitim Seti<br /><br />";
			return $Icerik;
		}
		
		public function BBB(){
			$Icerik		=	"A'dan Z'ye Javascript Eğitim Seti<br /><br />";
			return $Icerik;
		}
		
		public function CCC(){
			$Icerik		=	"A'dan Z'ye CSS3 Eğitim Seti<br /><br />";
			return $Icerik;
		}
		
	}
	
	class Egitmenler extends Dersler{
		
		public function AAA(){
			$Kim		=	"Volkan Alakent<br />" . parent::AAA();
			return $Kim;
		}
		
		public function BBB(){
			$Kim		=	"Onur Tatlı<br />" . parent::BBB();
			return $Kim;
		}
		
		public function CCC(){
			$Kim		=	"Ümit Okudan<br />" . parent::BBB();
			return $Kim;
		}
	
	}
	
	$Nesne	=	new Egitmenler;
	
	echo $Nesne->AAA();
	echo $Nesne->BBB();
	echo $Nesne->CCC();
	
	?>
</body>
</html>