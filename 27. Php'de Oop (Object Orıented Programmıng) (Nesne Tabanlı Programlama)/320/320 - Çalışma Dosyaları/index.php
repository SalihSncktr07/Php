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
	var 	:	Herhangi bir sınıf içerisinde standart değişken tanımlamak için kullanılır.
	*/
	
	class Deneme{
		
		var $Isim	=	"Volkan";
		
	}
	
	$Islem	=	new Deneme;
	
	echo $Islem->Isim;
	
	?>
</body>
</html>