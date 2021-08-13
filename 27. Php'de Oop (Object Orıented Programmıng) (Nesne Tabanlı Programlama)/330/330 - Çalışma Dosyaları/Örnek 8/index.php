<?php
	require_once("Siniflar/VolkanAlakent.php");
	require_once("Siniflar/OnurTatli.php");
	require_once("Siniflar/UmitOkudan.php");
?>
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

	$Bir	=	new \Uyeler\Volkan\Islemler\Kaydet\Deneme;
	echo $Bir->Harf . "<br />";
	$Iki	=	new \Odemeler\Volkan\Test;
	echo $Iki->Rakam . "<br /><br />";

	$Uc	=	new \Uyeler\Onur\Deneme;
	echo $Uc->Harf . "<br />";
	$Dort	=	new \Odemeler\Onur\Test;
	echo $Dort->Rakam . "<br /><br />";

	$Bes	=	new \Uyeler\Umit\Deneme;
	echo $Bes->Harf . "<br />";
	$Alti	=	new \Odemeler\Umit\Test;
	echo $Alti->Rakam . "<br /><br />";
	
	?>
</body>
</html>