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
	
	$GelenIsimDegeri	=	$_REQUEST["KullaniciIsmi"] ?? "HATA";
	$GelenSoyisimDegeri	=	$_REQUEST["KullaniciSoyismi"] ?? "HATA";
	
	echo "Formdan Gelen İsim Değeri : " . $GelenIsimDegeri . "<br />";
	echo "Formdan Gelen Soyisim Değeri : " . $GelenSoyisimDegeri . "<br />";
	
	?>
</body>
</html>