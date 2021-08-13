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
	
	for($Baslangic = 1; $Baslangic <= 1000; $Baslangic++){
		echo $Baslangic . "<br />";
		
		if($Baslangic==25){
			break;
		}

	}
	
	?>
</body>
</html>