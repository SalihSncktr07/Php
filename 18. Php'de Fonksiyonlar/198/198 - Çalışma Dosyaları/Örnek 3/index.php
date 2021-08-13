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
	
	function IsimYaz($Isim){
		
		function SoyisimYaz($Soyisim){
			
			function YasYaz($Yas){
			
				echo $Yas;
			
			}
			
			echo $Soyisim . "<br />";
			
			YasYaz("38");
			
		}
		
		echo $Isim . " ";
		
		SoyisimYaz("Alakent");
		
	}
	
	IsimYaz("Volkan");
	
	?>
</body>
</html>