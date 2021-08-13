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
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", array("Aslı", "Hale", "Banu", "Derya"), "Levent", "Serkan");
	
	print_r($Isimler);
	
	echo "<br /><br />";
	
	foreach($Isimler as $Anahtar => $Icerik){
		
		if($Anahtar == 3){
			
			foreach($Icerik as $Deger){
				echo $Deger . "<br />";
			}
			
		}else{
			echo $Icerik . "<br />";
		}
	}
	
	?>
</body>
</html>