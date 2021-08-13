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
	
	$DegerBir	=	34.25;
	$DegerIki	=	5.83;
	
	$Sonuc		=	$DegerBir % $DegerIki;	// 34.25 sayısı 5.83 sayısına normalde 5 defa tam olarak bölünebilir ve modülüs 5.10 olası gerekir. Fakat modülüs işlemlerinde ondalık haneler işleme dahil edilemezler yani; 34.25 sayısı 34 olarak değerlendirilir, 5.83 sayısına 5 olarak değerlendirilir ve 34 sayısı 5 sayısına 6 defa tam olarak bölünebildiği için; ; Formül : 5 * 6 = 30     34 - 30 = 4
	
	echo $DegerBir . " % " . $DegerIki . " = " . $Sonuc;
	
	?>
</body>
</html>