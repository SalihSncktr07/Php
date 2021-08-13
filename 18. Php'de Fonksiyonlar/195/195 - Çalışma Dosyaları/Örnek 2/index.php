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
			echo $Baslangic . " "; 
			$Baslangic++;
			
			yield;
		}
		
	}
	
	Islem(1, 50000);
	
	?>
</body>
</html>