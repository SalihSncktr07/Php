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
	unset()		:	Belirtilecek olan değişkeni, dizi anahtarını ve elemanını veya session'ı (oturumu) silmek / yok etmek için kullanılır.
	*/
	
	$Bilgiler	=	array("Isim" => "Volkan", "Soyisim" => "Alakent", "Sehir" => "İstanbul", "Meslek" => "PHP Programlama ve Yazılım Geliştirme Uzmanı");
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "</pre>";
	
	unset($Bilgiler["Sehir"]);
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "</pre>";
	
	?>
</body>
</html>