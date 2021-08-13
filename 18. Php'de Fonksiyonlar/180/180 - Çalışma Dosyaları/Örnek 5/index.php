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
	
	$Islem		=	array(
		"Volkan", 
		function(){
			echo "Extra Eğitim - Volkan Alakent - 1";
		},
		"Hakan", 
		function(){
			echo "Extra Eğitim - Volkan Alakent - 2";
		},
		"Onur",
		function(){
			echo "Extra Eğitim - Volkan Alakent - 3";
		},
		function(){
			echo "Extra Eğitim - Volkan Alakent - 4";
		}
	);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre><br /><br />";
	
	$Islem[1]();
	echo "<br />";
	$Islem[3]();
	echo "<br />";
	$Islem[5]();
	echo "<br />";
	$Islem[6]();
	
	?>
</body>
</html>