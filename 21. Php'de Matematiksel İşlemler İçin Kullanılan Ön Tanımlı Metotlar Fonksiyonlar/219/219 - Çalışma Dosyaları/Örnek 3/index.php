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
	mt_rand()			:	Mersenne twister algoritması kullanılarak rastgele bir tam sayı üreterek, ürettiği değeri geriye döndürür.
	mt_getrandmax()		:	mt_rand() metodu ile Mersenne twister algoritması kullanılarak üretilebilecek olan en büyük sayı değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$SayiUretBir	=	mt_rand(1, 5);
	$SayiUretIki	=	mt_rand(3000, 3200);
	$SayiUretUc		=	mt_rand(100000, 1000000);
	$SayiUretDort	=	mt_rand(550, 1050);
	$SayiUretBes	=	mt_rand(40, 140);
	
	echo "PHP tarafından Mersenne twister algoritması kullanılarak 1 ila 5 arasında rastgele üretilen sayı değeri : " . $SayiUretBir . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak 3000 ila 3200 arasında rastgele üretilen sayı değeri : " . $SayiUretIki . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak 100000 ila 1000000 arasında rastgele üretilen sayı değeri : " . $SayiUretUc . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak 550 ila 1050 arasında rastgele üretilen sayı değeri : " . $SayiUretDort . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak 40 ila 140 arasında rastgele üretilen sayı değeri : " . $SayiUretBes;
	
	?>
</body>
</html>