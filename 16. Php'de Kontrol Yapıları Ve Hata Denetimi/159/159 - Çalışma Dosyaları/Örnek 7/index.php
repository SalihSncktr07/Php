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
	if			=	Eğer.
	elseif		=	Değilse eğer.
	else		=	Değilse.
	
	Yapısı :
	
	if(Koşul veya Koşullar){
		Kod blokları
	}elseif(Koşul veya Koşullar){
		Kod blokları
	}else{
		Kod blokları
	}
	*/
	
	$Deger		=	"Haziran";
	
	if($Deger == "Ocak"){
		echo "Ocak ayı 1. aydır.";
	}elseif($Deger == "Şubat"){
		echo "Şubat ayı 2. aydır.";
	}elseif($Deger == "Mart"){
		echo "Mart ayı 3. aydır.";
	}elseif($Deger == "Nisan"){
		echo "Nisan ayı 4. aydır.";
	}elseif($Deger == "Mayıs"){
		echo "Mayıs ayı 5. aydır.";
	}elseif($Deger == "Haziran"){
		echo "Haziran ayı 6. aydır.";
	}elseif($Deger == "Temmuz"){
		echo "Temmuz ayı 7. aydır.";
	}elseif($Deger == "Ağustos"){
		echo "Ağustos ayı 8. aydır.";
	}elseif($Deger == "Eylül"){
		echo "Eylül ayı 9. aydır.";
	}elseif($Deger == "Ekim"){
		echo "Ekim ayı 10. aydır.";
	}elseif($Deger == "Kasım"){
		echo "Kasım ayı 11. aydır.";
	}elseif($Deger == "Aralık"){
		echo "Aralık ayı 12. aydır.";
	}else{
		echo "Belirtilen değer ( {$Deger} ) bir ay adı değildir.";
	}
	
	?>
</body>
</html>