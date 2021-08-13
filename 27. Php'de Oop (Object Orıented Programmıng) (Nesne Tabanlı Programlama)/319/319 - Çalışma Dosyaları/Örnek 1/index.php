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
	class	:	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
	new		:	Daha önceden tanımlanmış olan herhangi bir sınıfı çağıramak için kullanılır.
	
	Kurallar	:
	1. Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
	2. Sınıf isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
	3. Sınıf isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
	4. Sınıf isimleri hiçbir zaman bir rakam ile başlayamaz.
	5. Sınıf isimleri içerisinde hiçbir zaman boşluk, türkçe karkaterler ve özel karakterler kullanılamaz.
	6. Sınıf isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (namespace (isim uzayı) kullanılması durumunda birden fazla kez kullanılailir.)
	8. Sınıf isimleri küçük harf / büyük harf duyarlı değildir.
	9. Sınıf kapsama / etki alanı kurallarına tabidir.
	
	Yapısı		:
	class İsim{
		Kod blokları
	}
	*/
	
	class IsimSoyisim{

		public $isim		=	"Volkan";
		public $soyisim		=	"Alakent";
		
	}
	
	$Sonuc	=	new IsimSoyisim;
	
	echo $Sonuc->isim . "<br />";
	echo $Sonuc->soyisim;
	
	?>
</body>
</html>