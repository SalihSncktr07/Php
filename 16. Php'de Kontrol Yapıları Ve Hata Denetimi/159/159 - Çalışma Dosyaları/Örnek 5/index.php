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
	
	if(5 > 10){
		echo "if koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif(7 > 10){
		echo "1. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif(9 > 10){
		echo "2. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}elseif(15 > 10){
		echo "3. elseif koşulu geçerli oldu ve kod bloğu çalıştı.";
	}else{
		echo "if ve elseif koşulu geçersiz oldu ve else kod bloğu çalıştı.";
	}
	
	?>
</body>
</html>