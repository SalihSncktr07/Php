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
	
	class Bir {
		
		public function Deneme(){
			return "Volkan";
		}
		
	}
	
	class Iki extends Bir { 
		
		public function Deneme(){
			return "Hakan";
		}
		
	}
	
	class Uc extends Iki { 
		
		public function Deneme(){
			return "Onur";
		}
		
	}
	
	class Dort extends Uc { 
		
		public function Deneme(){
			return "Ümit";
		}
		
	}
	
	class Bes extends Dort { 
		
	}
	
	$Sonuc		=	new Bes;
	
	echo $Sonuc->Deneme();
	
	?>
</body>
</html>