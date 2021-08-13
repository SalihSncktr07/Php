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
	array_unique()		:	Dizinin içerisinde bulunan ve tekrarlanan elemanların fazla olanlarını silerek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Degerler		=	array("A1" => "Volkan", "A2" => "Mavi", "A3" => "Masa", "A4" => "Gökyüzü", "A5" => "Volkan", "A6" => "Hakan", "A7" => "Masa", "A8" => "Volkan", "A9" => "Volkan", "A10" => "Onur", "A11" => "Kırmızı", "A12" => "Bulut");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br />";
	
	$Sonuc			=	array_unique($Degerler);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>