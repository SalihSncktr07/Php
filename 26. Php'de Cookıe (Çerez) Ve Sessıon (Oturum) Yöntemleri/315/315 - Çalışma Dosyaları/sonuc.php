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
	
	$GelenAdi		=	$_POST["Adi"];
	$GelenSoyadi	=	$_POST["Soyadi"];
	$YasamSuresi	=	time() + ((60 * 60) * 24);
	
	setcookie("KullaniciAdi", $GelenAdi, $YasamSuresi);
	setcookie("KullaniciSoyadi", $GelenSoyadi, $YasamSuresi);
	
	?>
	
	<a href="Kim.php">Mesajı Göster</a>
	
</body>
</html>