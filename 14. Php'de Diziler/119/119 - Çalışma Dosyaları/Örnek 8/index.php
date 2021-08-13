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
						"Isim" => "Hakan",
						"Renkler" => array(
							"Mavi",
							"IcDizi" => array(
								array(
									"Halı",
									"YereSerilir" => "Kilim",
									"Battaniye"
								),
								"Masa",
								"Sandalye"
							),
							"Sarı",
							"Renk" => "Kırmızı",
							"Siyah"
						),
						array(
							"PHP",
							"JS",
							"Ders" => "HTML",
							"CSS",
							"ASP",
							"DenemeDizisi" => array(
								"GrafikProgrami" => "Photoshop",
								"Corel",
								"Paint"
							),
							"XML"
						),
						"Mac" => "Futbol Topu",
						"Basketbol Topu"
					);
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	echo $Degerler[0] . "<br />";
	echo $Degerler["Isim"] . "<br />";	
	echo $Degerler["Renkler"][0] . "<br />";
	echo $Degerler["Renkler"]["IcDizi"][0][0] . "<br />";
	echo $Degerler["Renkler"]["IcDizi"][0]["YereSerilir"] . "<br />";
	echo $Degerler["Renkler"]["IcDizi"][0][1] . "<br />";
	echo $Degerler["Renkler"]["IcDizi"][1] . "<br />";
	echo $Degerler["Renkler"]["IcDizi"][2] . "<br />";
	echo $Degerler["Renkler"][1] . "<br />";
	echo $Degerler["Renkler"]["Renk"] . "<br />";
	echo $Degerler["Renkler"][2] . "<br />";
	echo $Degerler[1][0] . "<br />";
	echo $Degerler[1][1] . "<br />";
	echo $Degerler[1]["Ders"] . "<br />";
	echo $Degerler[1][2] . "<br />";
	echo $Degerler[1][3] . "<br />";
	echo $Degerler[1]["DenemeDizisi"]["GrafikProgrami"] . "<br />";
	echo $Degerler[1]["DenemeDizisi"][0] . "<br />";
	echo $Degerler[1]["DenemeDizisi"][1] . "<br />";
	echo $Degerler[1][4] . "<br />";
	echo $Degerler["Mac"] . "<br />";
	echo $Degerler[2];
	
	?>
</body>
</html>