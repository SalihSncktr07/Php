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
	
	$Degerler		=	array("Volkan", "Bir" => "Hakan", "Uc" => "Onur");
	$Degerler[]			=	"Serkan";
	$Degerler["Iki"]	=	"Ümit";
	$Degerler[]			=	"Levent";
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	echo $Degerler[0] . "<br />";
	echo $Degerler["Bir"] . "<br />";
	echo $Degerler["Uc"] . "<br />";
	echo $Degerler[1] . "<br />";
	echo $Degerler["Iki"] . "<br />";
	echo $Degerler[2];
	
	?>
</body>
</html>