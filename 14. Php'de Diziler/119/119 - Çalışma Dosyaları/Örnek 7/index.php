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
	
	$Degerler	=	array(
						"Volkan",
						"Hakan",
						array(
							"Mavi",
							array(
								array(
									"Halı",
									"Kilim",
									"Battaniye"
								),
								"Masa",
								"Sandalye"
							),
							"Sarı",
							"Kırmızı",
							"Siyah"
						),
						array(
							"PHP",
							"JS",
							"HTML",
							"CSS",
							"ASP",
							array(
								"Photoshop",
								"Corel",
								"Paint"
							),
							"XML"
						),
						"Futbol Topu",
						"Basketbol Topu"
					);
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	echo $Degerler[0] . "<br />";
	echo $Degerler[1] . "<br />";
	echo $Degerler[2][0] . "<br />";
	echo $Degerler[2][1][0][0] . "<br />";
	echo $Degerler[2][1][0][1] . "<br />";
	echo $Degerler[2][1][0][2] . "<br />";
	echo $Degerler[2][1][1] . "<br />";
	echo $Degerler[2][1][2] . "<br />";
	echo $Degerler[2][2] . "<br />";
	echo $Degerler[2][3] . "<br />";
	echo $Degerler[2][4] . "<br />";
	echo $Degerler[3][0] . "<br />";
	echo $Degerler[3][1] . "<br />";
	echo $Degerler[3][2] . "<br />";
	echo $Degerler[3][3] . "<br />";
	echo $Degerler[3][4] . "<br />";
	echo $Degerler[3][5][0] . "<br />";
	echo $Degerler[3][5][1] . "<br />";
	echo $Degerler[3][5][2] . "<br />";
	echo $Degerler[3][6] . "<br />";
	echo $Degerler[4] . "<br />";
	echo $Degerler[5];
	
	?>
</body>
</html>