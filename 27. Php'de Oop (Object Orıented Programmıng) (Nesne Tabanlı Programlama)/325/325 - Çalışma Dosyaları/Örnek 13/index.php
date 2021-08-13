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
			echo $Icerik;
		}
		
		public function BBB(){
			$Icerik		=	"A'dan Z'ye Javascript Eğitim Seti<br /><br />";
			echo $Icerik;
		}
		
		public function CCC(){
			$Icerik		=	"A'dan Z'ye CSS3 Eğitim Seti<br /><br />";
			echo $Icerik;
		}
		
	}
	
	class Egitmenler extends Dersler{
		
		public function AAA(){
			$Kim		=	"Volkan Alakent<br />";
			echo $Kim;
			parent::AAA();
		}
		
		public function BBB(){
			$Kim		=	"Onur Tatlı<br />";
			echo $Kim;
			parent::BBB();
		}
		
		public function CCC(){
			$Kim		=	"Ümit Okudan<br />";
			echo $Kim;
			parent::CCC();
		}
	
	}
	
	$Nesne	=	new Egitmenler;
	
	$Nesne->AAA();
	$Nesne->BBB();
	$Nesne->CCC();
	
	?>
</body>
</html>