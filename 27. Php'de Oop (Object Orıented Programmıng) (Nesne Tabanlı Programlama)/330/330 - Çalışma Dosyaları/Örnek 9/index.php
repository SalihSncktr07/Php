<?php
	require_once("Siniflar/VolkanAlakent.php");
	require_once("Siniflar/OnurTatli.php");

	use \Uyeler\Volkan\Islemler\Kaydet\Deneme as VA;
	use \Uyeler\Onur\Deneme as OT;
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

	$Bir	=	new VA;
	echo $Bir->Harf . "<br />";

	$Uc	=	new OT;
	echo $Uc->Harf . "<br />";
	
	?>
</body>
</html>