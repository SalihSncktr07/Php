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
			$Kur	=	4.0669;
		}elseif($Birim=="Euro"){
			$Kur	=	4.9123;
		}else{
			$Kur	=	0;
		}
		
		return Hesapla($Birim, $Kur, $Tutar);
	}
	
	function Hesapla($BirimBilgisi, $KurBilgisi, $TutarBilgisi){
		$Sonuc	=	$KurBilgisi * $TutarBilgisi;
		echo $TutarBilgisi . " Tutarlı " . $BirimBilgisi . " Karşılığı Türk Lirası Değeri : " . $Sonuc . " TL<br />Kur : " . $KurBilgisi;
	}
	
	ParaBirimi("Euro", 82);
	
	?>
</body>
</html>