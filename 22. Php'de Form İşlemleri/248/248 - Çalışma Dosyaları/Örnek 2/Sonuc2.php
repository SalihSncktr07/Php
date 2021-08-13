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
		$GelenIsimDegeri		=	$_POST["Isim"];
		$GelenSoyisimDegeri		=	$_POST["Soyisim"];
		$GelenTelefonDegeri		=	$_POST["Telefon"];
		$GelenMailDegeri		=	$_POST["Mail"];
	
		echo "Adınız : " . $GelenIsimDegeri . "<br />";
		echo "Soyadınız : " . $GelenSoyisimDegeri . "<br />";
		echo "Telefon : " . $GelenTelefonDegeri . "<br />";
		echo "E-Mail : " . $GelenMailDegeri;
	?>
</body>
</html>