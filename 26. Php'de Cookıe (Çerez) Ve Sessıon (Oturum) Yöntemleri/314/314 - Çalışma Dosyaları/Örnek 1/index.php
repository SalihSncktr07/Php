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
	
	/*
	// Burası normal cookie oluşturma yapısıdır. İlk bu örneği çalıştırarak çıktı sonucunu kontrol edip, daha sonra bu örneği gizleyerek ve tarayıcı çerezlerini silerek aynı şekilde alttaki örneği deneyiniz.
	setcookie("KullaniciAdi", "Volkan", $YasamSuresi);
	setcookie("KullaniciSoyadi", "Alakent", $YasamSuresi);
	setcookie("KullaniciEmailAdresi", "info@extraegitim.com", $YasamSuresi);
	setcookie("KullaniciTelefonu", "0535 225 51 44", $YasamSuresi);
	
	setcookie("SepetID", 5, $YasamSuresi);
	setcookie("SepetTutari", 1250, $YasamSuresi);
	setcookie("SepetTaksitSayisi", 6, $YasamSuresi);
	setcookie("SepetOdemeTuru", "Kredi Kartı", $YasamSuresi);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";	
	*/
	
	setcookie("Kullanici[Adi]", "Volkan", $YasamSuresi);
	setcookie("Kullanici[Soyadi]", "Alakent", $YasamSuresi);
	setcookie("Kullanici[EmailAdresi]", "info@extraegitim.com", $YasamSuresi);
	setcookie("Kullanici[Telefonu]", "0535 225 51 44", $YasamSuresi);
		
	setcookie("Sepet[ID]", 5, $YasamSuresi);
	setcookie("Sepet[Tutari]", 1250, $YasamSuresi);
	setcookie("Sepet[TaksitSayisi]", 6, $YasamSuresi);
	setcookie("Sepet[OdemeTuru]", "Kredi Kartı", $YasamSuresi);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";	
	
	?>
</body>
</html>