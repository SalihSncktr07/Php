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
	rand()			:	Rastgele bir tam sayı üreterek, ürettiği değeri geriye döndürür.
	getrandmax()	:	rand() metodu kullanılarak üretilebilecek en büyük sayının değerini bularak, bulduğu değeri geriye döndürür.
	*/

	$SayiUretBir	=	rand();
	$SayiUretIki	=	rand();
	$SayiUretUc		=	rand();
	$SayiUretDort	=	rand();
	$SayiUretBes	=	rand();
	
	echo "PHP tarafından üretilen sayı değeri : " . $SayiUretBir . "<br />";
	echo "PHP tarafından üretilen sayı değeri : " . $SayiUretIki . "<br />";
	echo "PHP tarafından üretilen sayı değeri : " . $SayiUretUc . "<br />";
	echo "PHP tarafından üretilen sayı değeri : " . $SayiUretDort . "<br />";
	echo "PHP tarafından üretilen sayı değeri : " . $SayiUretBes;

	?>
</body>
</html>