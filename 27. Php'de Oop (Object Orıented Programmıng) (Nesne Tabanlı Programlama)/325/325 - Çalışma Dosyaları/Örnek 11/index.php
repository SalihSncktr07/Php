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
	
	class Bir{
		
		public function Bilgi(){
			$Metin	=	"PHP";
			return $Metin;
		}
		
	}
	
	class Iki extends Bir{
		
		public function Bilgi(){
			$Metin	=	"JS " . parent::Bilgi();
			return $Metin;
		}
	
	}
	
	
	$Nesne	=	new Iki;
	
	echo $Nesne->Bilgi();
	
	?>
</body>
</html>