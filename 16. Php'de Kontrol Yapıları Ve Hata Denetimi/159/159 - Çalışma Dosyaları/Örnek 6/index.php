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
	
	$Deger1		=	"Volkan";
	$Deger2		=	"Hakan";
	$Deger3		=	"Onur";
	$Deger4		=	"Ümit";
	
	if($Deger1 == "Onur"){
		echo "if koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger2 == "Onur"){
		echo "1. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger3 == "Onur"){
		echo "2. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif($Deger4 == "Onur"){
		echo "3. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}else{
		echo "if koşulu geçersiz oldu ve else kod bloğu çalıştı.";
	}
	
	?>
</body>
</html>