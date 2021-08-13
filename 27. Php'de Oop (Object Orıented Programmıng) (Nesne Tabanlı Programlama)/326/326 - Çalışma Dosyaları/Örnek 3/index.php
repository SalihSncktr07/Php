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
	
	class DenemeBir {
		
		protected $Isim	=	"Volkan";
		
	}
	
	class DenemeIki extends DenemeBir {
		
	}
	
	$Sonuc		=	new DenemeIki;
	
	echo $Sonuc->Isim; // Özellik protected olduğu için hata kodu döndürür.
	
	?>
</body>
</html>