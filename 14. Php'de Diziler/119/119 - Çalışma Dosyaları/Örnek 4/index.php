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
	
	$Degerler	=	array("DegerA" => "Volkan", "Hakan", "DiziA" => array("Mavi", "Renk" => "Kırmızı", "Sarı", "Siyah", "DiziB" => array("Masa", "EsyaBir" => "Sandalye", "Sehpa")), "Onur", "Serkan");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
		
	echo $Degerler["DegerA"] . "<br />";
	echo $Degerler[0] . "<br />";
	echo $Degerler["DiziA"][0] . "<br />";
	echo $Degerler["DiziA"]["Renk"] . "<br />";
	echo $Degerler["DiziA"][1] . "<br />";
	echo $Degerler["DiziA"][2] . "<br />";
	echo $Degerler["DiziA"]["DiziB"][0] . "<br />";
	echo $Degerler["DiziA"]["DiziB"]["EsyaBir"] . "<br />";
	echo $Degerler["DiziA"]["DiziB"][1] . "<br />";
	echo $Degerler[1] . "<br />";
	echo $Degerler[2];
	
	?>
</body>
</html>