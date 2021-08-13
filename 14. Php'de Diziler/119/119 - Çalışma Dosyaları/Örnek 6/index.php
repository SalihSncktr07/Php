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
	
	define("DEGERLER", array("Volkan", "Hakan", array("Mavi", "Kırmızı", "Sarı", "Siyah"), "Onur", "Serkan"));
	
	echo "<pre>";
	print_r(DEGERLER);
	echo "</pre><br /><br />";
	
	echo DEGERLER[0] . "<br />";
	echo DEGERLER[1] . "<br />";
	echo DEGERLER[2][0] . "<br />";
	echo DEGERLER[2][1] . "<br />";
	echo DEGERLER[2][2] . "<br />";
	echo DEGERLER[2][3] . "<br />";
	echo DEGERLER[3] . "<br />";
	echo DEGERLER[4];	
	
	?>
</body>
</html>