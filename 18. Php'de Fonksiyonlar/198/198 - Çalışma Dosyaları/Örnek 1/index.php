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
	
	function Bir($Isim){
		
		function Iki($Soyisim){
			
			echo $Soyisim;
			
		}
		
		echo $Isim . " ";
		
		Iki("Alakent");
		
	}
	
	Bir("Volkan");
	
	?>
</body>
</html>