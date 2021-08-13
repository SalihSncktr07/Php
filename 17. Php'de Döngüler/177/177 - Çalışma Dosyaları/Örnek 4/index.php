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
	continue	:	Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir sonraki işleme devam etmesi için kullanılır.
	*/
	
	$Isimler	=	array("Onur", "Ümit", "Serkan", "Volkan", "Hakan", "Mesut", "Levent", "Furkan");
	
	foreach($Isimler as $Deger){
		if(($Deger == "Volkan") or ($Deger == "Hakan")){
			continue;
		}
		
		echo $Deger . "<br />";
	}
	
	?>
</body>
</html>