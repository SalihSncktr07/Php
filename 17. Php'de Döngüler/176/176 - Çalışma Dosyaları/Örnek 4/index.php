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
	break		:	Döngünün çalışmasını sonlandırmak için kullanılır.
	*/

	$Esyalar	=	array("Masa", "Sandalye", "Dolap", "Halı", "Saat", "Koltuk");
	
	foreach($Esyalar as $Deger){
		echo $Deger . "<br />";
		
		if($Deger=="Dolap"){
			break;
		}
	}
	
	?>
</body>
</html>