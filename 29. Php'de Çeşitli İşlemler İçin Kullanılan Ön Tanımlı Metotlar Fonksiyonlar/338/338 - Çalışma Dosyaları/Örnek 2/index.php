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
	
	$Isim		=	"Volkan";
	$Soyisim	=	"Alakent";
	
	echo $Isim . " " . $Soyisim . "<br />";
	
	unset($Isim);
	unset($Soyisim);
	
	echo $Isim . " " . $Soyisim; // Hata kodu döndürür, çünkü unset() metodu ile Isim ve Soyisim adındaki değişken yok edildi.
	
	?>
</body>
</html>