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
	str_shuffle()	:	Belirtilecek olan içeriğin tüm karakterlerini rastgele karıştırarak, karıştırılmış olan değeri geriye döndürür.
	strrev()		:	Belirtilecek olan içeriği sondan başa olmak üzere ters çevirerek, çevrilmiş olan değeri geriye döndürür.
	str_repeat()	:	Belirtilecek olan içeriği, belirtilecek olan sayı değeri kadar tekrarlayarak, oluşturulmuş olan değeri geriye döndürür.
	*/
	
	$Icerik		=	"Extra Eğitim";
	
	echo $Icerik . "<br />";
	
	$TersCevir	=	strrev($Icerik);
	
	echo $TersCevir;	
	
	?>
</body>
</html>