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
	
	function IsimYaz($Isim="Onur"){
		
		function SoyisimYaz($Soyisim="Tatlı"){
			
			function YasYaz($Yas=35){
			
				echo $Yas;
			
			}
			
			echo $Soyisim . "<br />";
			
			YasYaz();
			
		}
		
		echo $Isim . " ";
		
		SoyisimYaz();
		
	}
	
	IsimYaz();
	
	?>
</body>
</html>