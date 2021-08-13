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
	
	function Bir($DegerBir){
		
		function Iki($DegerIki){
			
			function Uc($DegerUc){
				
				echo $DegerUc;
				
			}
			
			Uc($DegerIki);
			
		}
		
		Iki($DegerBir);
		
	}
	
	Bir("Volkan Alakent");
	
	?>
</body>
</html>