<?php
declare(strict_types=1);
?>
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
	declare(strict_types=1)		:	Kodlama dosyası içerisindeki tüm kodlamaların kural yapısını belirler. 
	*/
	
	function Deneme(string $Isim, string $Soyisim, int $Yas):array{
		
		$Birlestir	=	array($Isim, $Soyisim, $Yas);

		return $Birlestir;
		
	}
	
	$Sonuc	=	Deneme("Volkan", "Alakent", 38);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>