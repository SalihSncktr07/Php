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
	
	function Bir($IsimBir, $SoyisimBir){
		
		function Iki($IsimIki, $SoyisimIki){
			
			function Uc($IsimUc, $SoyisimUc){
				
				echo $IsimUc . " " . $SoyisimUc;
				
			}
			
			Uc($IsimIki, $SoyisimIki);
			
		}
		
		Iki($IsimBir, $SoyisimBir);
		
	}
	
	Bir("Volkan", "Alakent");
	
	?>
</body>
</html>