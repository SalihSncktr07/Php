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
	count()				:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	sizeof()			:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	COUNT_RECURSIVE		:	Çok boyutlu dizilerde, tüm boyutlar içerindeki elemanlarda sayma işlemine dahil edilir.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", array("Banu", "Derya", "Aslı", "Hale"), "Levent", "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$DizininElemanSayisi	=	count($Isimler, COUNT_RECURSIVE);
	
	echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;
	
	?>
</body>
</html>