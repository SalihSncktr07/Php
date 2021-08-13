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
	
	function ParaBirimi($Birim, $Tutar){
		if($Birim=="Türk Lirası"){
			$Kur	=	1;
		}elseif($Birim=="Amerikan Doları"){
			$Kur	=	4;
		}elseif($Birim=="Euro"){
			$Kur	=	5;
		}else{
			$Kur	=	0;
		}
		
		return Hesapla($Kur, $Tutar);
	}
	
	function Hesapla($KurBilgisi, $TutarBilgisi){
		$Sonuc	=	$KurBilgisi * $TutarBilgisi;
		echo "Girilen Tutarın TL Karşılığı : " . $Sonuc;
	}
	
	ParaBirimi("Amerikan Doları", 1000);
	
	?>
</body>
</html>