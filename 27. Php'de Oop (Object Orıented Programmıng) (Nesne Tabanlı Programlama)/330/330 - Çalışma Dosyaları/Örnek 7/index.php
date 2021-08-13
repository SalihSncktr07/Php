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
	
	require_once("Siniflar/VolkanAlakent.php");
	require_once("Siniflar/OnurTatli.php");
	require_once("Siniflar/UmitOkudan.php");

	$Bir	=	new \Uyeler\Volkan\Islemler\Kaydet\Deneme;
	echo $Bir->Harf . "<br />";
	
	$Iki	=	new \Uyeler\Onur\Deneme;
	echo $Iki->Harf . "<br />";
	
	$Uc		=	new \Uyeler\Umit\Deneme;
	echo $Uc->Harf . "<br />";
	
	?>
</body>
</html>