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
	
	$SayiUretBir	=	mt_rand();
	$SayiUretIki	=	mt_rand();
	$SayiUretUc		=	mt_rand();
	$SayiUretDort	=	mt_rand();
	$SayiUretBes	=	mt_rand();
	
	echo "PHP tarafından Mersenne twister algoritması kullanılarak rastgele üretilen sayı değeri : " . $SayiUretBir . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak rastgele üretilen sayı değeri : " . $SayiUretIki . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak rastgele üretilen sayı değeri : " . $SayiUretUc . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak rastgele üretilen sayı değeri : " . $SayiUretDort . "<br />";
	echo "PHP tarafından Mersenne twister algoritması kullanılarak rastgele üretilen sayı değeri : " . $SayiUretBes;
	
	?>
</body>
</html>