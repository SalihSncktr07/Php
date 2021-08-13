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
	
	$YasamSuresi	=	time() + (60 * 5);
	
	setcookie("Kullanici[Adi]", "Volkan", $YasamSuresi);
	setcookie("Kullanici[Soyadi]", "Alakent", $YasamSuresi);
	setcookie("Kullanici[EmailAdresi]", "info@extraegitim.com", $YasamSuresi);
	setcookie("Kullanici[Telefonu]", "0535 225 51 44", $YasamSuresi);
		
	setcookie("Sepet[ID]", 5, $YasamSuresi);
	setcookie("Sepet[Tutari]", 1250, $YasamSuresi);
	setcookie("Sepet[TaksitSayisi]", 6, $YasamSuresi);
	setcookie("Sepet[OdemeTuru]", "Kredi Kartı", $YasamSuresi);
	
	echo "<pre>";
	print_r($_COOKIE["Kullanici"]);
	echo "</pre>";	
	
	?>
</body>
</html>