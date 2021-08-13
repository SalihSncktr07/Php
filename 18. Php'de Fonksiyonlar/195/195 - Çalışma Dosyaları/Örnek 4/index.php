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
	yield	:	Fonksiyonlardan değer döndürmek için kullanılır.
	*/
	
	function Islem($Baslangic, $Bitis){
			
		while($Baslangic<=$Bitis){
			yield $Baslangic;
			$Baslangic++;
		}

		echo "<br />Bu İfade Yazacakmı?";
	}
	
	$Sonuc	=	Islem(1, 500000);

	foreach($Sonuc as $Deger){
		echo $Deger . " ";
	}
	
	echo "<br /><br />";
	
	$BellekTuketimi		=	memory_get_usage();
	echo "İşlem esnasında tüketilen bellek miktarı : " . $BellekTuketimi . " byte";
	
	?>
</body>
</html>