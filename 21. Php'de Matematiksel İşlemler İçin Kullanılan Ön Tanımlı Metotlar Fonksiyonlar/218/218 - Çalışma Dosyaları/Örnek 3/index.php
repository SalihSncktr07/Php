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

	$SayiUretBir	=	rand(0, 1000);
	$SayiUretIki	=	rand(500, 750);
	$SayiUretUc		=	rand(1000000, 2000000);
	$SayiUretDort	=	rand(150000, 151000);
	$SayiUretBes	=	rand(10, 20);
	
	echo "PHP tarafından 0 ila 1000 arası üretilen sayı değeri : " . $SayiUretBir . "<br />";
	echo "PHP tarafından 500 ila 750 arası üretilen sayı değeri : " . $SayiUretIki . "<br />";
	echo "PHP tarafından 1000000 ila 2000000 arası üretilen sayı değeri : " . $SayiUretUc . "<br />";
	echo "PHP tarafından 150000 ila 151000 arası üretilen sayı değeri : " . $SayiUretDort . "<br />";
	echo "PHP tarafından 10 ila 20 arası üretilen sayı değeri : " . $SayiUretBes;

	?>
</body>
</html>