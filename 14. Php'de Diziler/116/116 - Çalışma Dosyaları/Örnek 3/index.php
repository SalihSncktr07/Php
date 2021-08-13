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
	
	$Isimler		=	array("PHP" => "Volkan", "HTML" => "Hakan", "JS" => "Onur", "CSS" => "Serkan");
	$Isimler["HTML"]	=	"Ümit";
	$Isimler["JS"]		=	"Levent";
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br /><br />";
	
	echo $Isimler["PHP"] . "<br />";
	echo $Isimler["HTML"] . "<br />";
	echo $Isimler["JS"] . "<br />";
	echo $Isimler["CSS"] . "<br />";
	
	?>
</body>
</html>