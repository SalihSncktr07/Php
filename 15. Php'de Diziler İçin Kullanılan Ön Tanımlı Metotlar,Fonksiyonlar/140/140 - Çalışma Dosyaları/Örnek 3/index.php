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
	
	$Degerler		=	array("Volkan", 8, "Mavi", 5.12, "Masa", 12.44, "Gökyüzü", "Volkan", 12, "Hakan", "Masa", 18, "Volkan", "Volkan", 8, "Onur", 8, "Kırmızı", 5.12, "Bulut");
	
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