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
		"Hakan", 
		array(
			function(){
				echo "Extra Eğitim & Volkan Alakent";
			}
		),
		
		"Onur"
	);
	
	echo $Islem[0] . "<br />";
	echo $Islem[1] . "<br />";
	$Islem[2][0]();
	echo "<br />";
	echo $Islem[3];
	
	?>
</body>
</html>