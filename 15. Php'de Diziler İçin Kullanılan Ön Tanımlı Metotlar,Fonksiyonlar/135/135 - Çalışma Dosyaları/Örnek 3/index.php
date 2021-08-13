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
	array_column()	:	Çok boyutlu bir dizi içerisinde bulunan elemanı / elemanları belirtilecek olan anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Takimlar	=	array(array("KurulusYili" => "1907", "TakimAdi" => "Fenerbahçe"), array("KurulusYili" => "1905", "TakimAdi" => "Galatasaray"), array("KurulusYili" => "1903", "TakimAdi" => "Beşiktaş"));
	
	echo "<pre>";
	print_r($Takimlar);
	echo "</pre>";
	
	$Sonuc	=	array_column($Takimlar, "TakimAdi", "KurulusYili");
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>