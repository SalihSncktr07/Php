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
	sqrt()	:	Herhangi bir sayının karekökünü bularak, bulduğu değeri geriye döndürür.
	*/
	
	$ASayisi				=	9;
	
	$ASayisininKarekoku		=	sqrt($ASayisi);
	
	echo $ASayisi . " sayısının karekökü : " . $ASayisininKarekoku . "<br /><br />";
	
	$BSayisi				=	55.8;
	
	$BSayisininKarekoku		=	sqrt($BSayisi);
	
	echo $BSayisi . " sayısının karekökü : " . $BSayisininKarekoku . "<br /><br />";
	
	$CSayisi				=	-9;
	
	$CSayisininKarekoku		=	sqrt($CSayisi);
	
	echo $CSayisi . " sayısının karekökü : " . $CSayisininKarekoku;
	
	?>
</body>
</html>