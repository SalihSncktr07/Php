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
	
	define("DEGERLER", array("PHP" => "Volkan", "CSS3" => "Hakan", "HTML5" => "Onur", "JAVASCRIPT" => "Ümit"));
	
	echo "<pre>";
	print_r(DEGERLER);
	echo "</pre><br /><br />";
	
	echo DEGERLER["PHP"] . "<br />";
	echo DEGERLER["CSS3"] . "<br />";
	echo DEGERLER["HTML5"] . "<br />";
	echo DEGERLER["JAVASCRIPT"];
	
	?>
</body>
</html>