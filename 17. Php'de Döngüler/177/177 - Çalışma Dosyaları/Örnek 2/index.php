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
	
	$Sayi	=	0;
	
	do{
		$Sayi++;
		
		if(($Sayi>10) and ($Sayi<20)){
			continue;
		}

		echo $Sayi . "<br />";
	}while($Sayi < 50);
	
	?>
</body>
</html>