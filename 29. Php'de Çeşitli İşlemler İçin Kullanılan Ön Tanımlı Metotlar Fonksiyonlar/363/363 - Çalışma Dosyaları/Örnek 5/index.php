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
	wordwrap()	:	Belirtilecek olan içeriğe, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan değer / değerleri ekleyerek, eklenmiş olan değeri geriye döndürür.
	str_pad()	:	Belirtilecek olan içeriğin, belirtilecek olan değer / değerler doğrultusunda, başına, sonuna veya hem başına hemde sonuna değer ekleyerek, eklenmiş olan değeri geriye döndürür.
		STR_PAD_LEFT	:	Belirtilecek olan içeriğin başına / soluna değer eklemek için kullanılır.
		STR_PAD_RIGHT	:	Belirtilecek olan içeriğin sonuna / sağına değer eklemek için kullanılır.
		STR_PAD_BOTH	:	Belirtilecek olan içeriğin hem başına / soluna, hemde sonuna / sağına değer eklemek için kullanılır.
	*/
	
	$Metin		=	"Extra Eğitim";
	
	echo $Metin . "<br />";
	
	$Islem		=	str_pad($Metin, 30, "VOLKAN", STR_PAD_BOTH);
	
	echo $Islem;
	
	?>
</body>
</html>