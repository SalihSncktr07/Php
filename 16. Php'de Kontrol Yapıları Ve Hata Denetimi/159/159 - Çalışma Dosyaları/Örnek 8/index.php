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
	
	$Saat		=	11;
	
	if(($Saat >= 0) and ($Saat <= 6)){
		echo "İyi geceler.";
	}elseif(($Saat > 6) and ($Saat <= 9)){
		echo "Günaydın.";
	}elseif(($Saat > 9) and ($Saat <= 17)){
		echo "İyi günler.";
	}elseif(($Saat > 17) and ($Saat <= 23)){
		echo "İyi akşamlar.";
	}else{
		echo "Belirtilen değer ( {$Saat} ) bir saat dilimi değildir.";
	}
	
	?>
</body>
</html>