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
	fmod()	:	Herhangi bir sayının belirtilecek olan değere göre modülüsünü (kalanını) bularak, bulduğu değeri geriye döndürür.
	*/
	
	$DegerBir	=	124;
	$DegerIki	=	5;
	
	$Modulus	=	fmod($DegerBir, $DegerIki);
	
	echo $DegerBir . " % " . $DegerIki . " = " . $Modulus;
	
	?>
</body>
</html>