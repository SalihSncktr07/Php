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
	file()		:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri satır satır bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	readfile()	:	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri tek bir defada bularak, bulduğu değeri geriye döndürür. Ayrıca dosyalara download (indirilebilme) veya transfer özelliği atamak için kullanılır.
	*/
	
	$Icerik		=	"https://www.hepsiburada.com";
	$IcerikOku	=	file($Icerik);
	
	echo "<pre>";
	
	foreach($IcerikOku as $Anahtar => $Eleman){
		echo htmlspecialchars($Eleman) . "<br />";
	}
	
	echo "</pre>";
	?>
</body>
</html>