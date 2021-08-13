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
	/*
	Yapısı :
	
	if(Koşul veya Koşullar):
		Kod blokları
	elseif(Koşul veya Koşullar):
		Kod blokları
	else:
		Kod blokları
	endif;
	*/
	
	$Ayadi		=	"Aralık";
	
	if(($Ayadi=="Mart") or ($Ayadi=="Nisan") or ($Ayadi=="Mayıs")):
		echo $Ayadi . " ayı bir ilkbahar ayıdır.";
	elseif(($Ayadi=="Haziran") or ($Ayadi=="Temmuz") or ($Ayadi=="Ağustos")):
		echo $Ayadi . " ayı bir yaz ayıdır.";
	elseif(($Ayadi=="Eylül") or ($Ayadi=="Ekim") or ($Ayadi=="Kasım")):
		echo $Ayadi . " ayı bir sonbahar ayıdır.";
	elseif(($Ayadi=="Aralık") or ($Ayadi=="Ocak") or ($Ayadi=="Şubat")):
		echo $Ayadi . " ayı bir kış ayıdır.";
	else:
		echo "Girilen değer ( {$Ayadi} ) bir ay adı değildir.";
	endif;
	
	?>
</body>
</html>