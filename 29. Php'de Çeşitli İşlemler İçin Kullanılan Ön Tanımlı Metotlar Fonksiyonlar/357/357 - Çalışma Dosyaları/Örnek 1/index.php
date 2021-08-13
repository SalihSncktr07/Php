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
	ucwords()	:	Belirtilecek olan içerikte bulunan tüm kelimelerin ilk harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	ucfirst()	:	Belirtilecek olan içeriğin ilk harfini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	lcfirst()	:	Belirtilecek olan içeriğin ilk harfini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/
	
	$Icerik			=	"extra eğitim - volkan alakent - a'dan z'ye php görsel eğitim seti - istanbul";
	
	echo $Icerik . "<br />";
	
	$Metin			=	ucwords($Icerik);
	
	echo $Metin;
	
	?>
</body>
</html>