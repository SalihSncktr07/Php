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
	
	function Bir($IsimBir="Onur", $SoyisimBir="Tatlı", $YasBir=35){
		
		function Iki($IsimIki="Serkan", $SoyisimIki="Çelik", $YasIki=36){
			
			function Uc($IsimUc="Ümit", $SoyisimUc="Okudan", $YasUc=40){
				
				echo $IsimUc . " " . $SoyisimUc . " Yaş : " . $YasUc;
				
			}
			
			Uc($IsimIki, $SoyisimIki, $YasIki);
			
		}
		
		Iki($IsimBir, $SoyisimBir, $YasBir);
		
	}
	
	Bir("Volkan", "Alakent");
	
	?>
</body>
</html>