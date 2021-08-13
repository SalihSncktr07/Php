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
	while		:	Döngü işlemi başlatır.
	
	Yapısı :
	while(Koşul){
		Kod blokları
	}
	*/
	
	$BaslangicDegeri	=	5;
	
	while($BaslangicDegeri <= 250){
		
		echo "Döngü Çalışma Numarası : " . $BaslangicDegeri . "<br />";
		
		$BaslangicDegeri	=	$BaslangicDegeri + 5;
	}
	
	?>
</body>
</html>