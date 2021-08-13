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
	abs()	:	Herhangi bir sayının mutlak değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$SayiBir			=	5;
	$SayiBirMutlak		=	abs($SayiBir);
	
	echo "5 sayısının ilk hali : " . $SayiBir . "<br />";
	echo "5 sayısının mutlak hali : " . $SayiBirMutlak . "<br /><br />";
	
	$SayiIki			=	1024.88;
	$SayiIkiMutlak		=	abs($SayiIki);
	
	echo "1024.88 sayısının ilk hali : " . $SayiIki . "<br />";
	echo "1024.88 sayısının mutlak hali : " . $SayiIkiMutlak . "<br /><br />";

	
	$SayiUc			=	-5;
	$SayiUcMutlak		=	abs($SayiUc);
	
	echo "-5 sayısının ilk hali : " . $SayiUc . "<br />";
	echo "-5 sayısının mutlak hali : " . $SayiUcMutlak . "<br /><br />";
	
	$SayiDort			=	-1024.88;
	$SayiDortMutlak		=	abs($SayiDort);
	
	echo "-1024.88 sayısının ilk hali : " . $SayiDort . "<br />";
	echo "-1024.88 sayısının mutlak hali : " . $SayiDortMutlak;
	
	?>
</body>
</html>