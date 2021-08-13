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
	
	$Bir	=	new VolkaninSiniflari\Deneme;
	echo $Bir->Harf . "<br />";
	
	$Iki	=	new OnurunSiniflari\Deneme;
	echo $Iki->Harf . "<br />";
	
	$Uc		=	new UmitinSiniflari\Deneme;
	echo $Uc->Harf . "<br />";
	
	?>
</body>
</html>