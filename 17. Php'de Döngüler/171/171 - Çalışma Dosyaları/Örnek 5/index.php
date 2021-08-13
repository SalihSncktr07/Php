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
	while		:	Döngü işlemi başlatır.
	
	Yapısı :
	while(Koşul){
		Kod blokları
	}
	*/
	
	$Deger	=	1;
	
	while($Deger <= 100){
		
		echo $Deger . "<br />";
		
		if($Deger < 10){
			$Deger++;
		}elseif(($Deger >= 10) and ($Deger < 90)){
			$Deger = $Deger + 5;
		}else{
			$Deger = $Deger + 2;
		}
	}
	
	?>
</body>
</html>