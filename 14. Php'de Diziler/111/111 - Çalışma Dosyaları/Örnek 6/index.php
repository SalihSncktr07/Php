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
	
	const DEGERLER	= array("Volkan", "Hakan", "Onur");
	
	echo "<pre>";
	print_r(DEGERLER);
	echo "</pre>";
	
	echo DEGERLER[0] . "<br />";
	echo DEGERLER[1] . "<br />";
	echo DEGERLER[2];
	
	?>
</body>
</html>