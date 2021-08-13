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
	
	function Deneme(array $Deger):string{
		
		$Islem	=	implode("<br />", $Deger);

		return $Islem;
		
	}
	
	$Ornek	=	array("Volkan", "Hakan", "Onur", "Levent");
	
	$Sonuc	=	Deneme($Ornek);
	
	echo $Sonuc;
	
	?>
</body>
</html>