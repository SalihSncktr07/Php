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
	min()	:	Değişken içeriklerinin veya dizi elemanlarının rakamsal değerler içermesi durumunda en küçük rakamsal değeri bularak, bulduğu değeri geriye döndürür.
	max()	:	Değişken içeriklerinin veya dizi elemanlarının rakamsal değerler içermesi durumunda en büyük rakamsal değeri bularak, bulduğu değeri geriye döndürür.
	*/
	
	$RakamlarBir	=	array(5, 6, 72, 3, 83, 82, 55, 12, 52);
	
	echo "<pre>";
	print_r($RakamlarBir);
	echo "</pre>";
	
	$DizininEnKucukElemani	=	min($RakamlarBir);
	
	echo "Yukarıdaki dizinin en küçük eleman değeri : " . $DizininEnKucukElemani . "<br /><br />";
	
	$RakamlarIki	=	min(5, 6, 72, 3, 83, 82, 55, 12, 52);
	
	echo "Değişkenin en küçük eleman değeri : " . $RakamlarIki . "<br /><br />";
	
	?>
</body>
</html>