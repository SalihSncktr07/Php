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
	addslashes()	:	Belirtilecek olan içerikte bulunan ' (tek tırnak) ve " (çift tırnak) işaretlerinin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	stripslashes()	:	Belirtilecek olan içerikte bulunan ve önüne \ (ters slash) yani kaçırma operatörü eklenmiş olan tüm karakterlerin önünde bulunan \ (ters slash) yani kaçırma operatörlerini kaldırır ve aktif bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	addcslashes()	:	Belirtilecek olan içerikte bulunan, belirtilecek olan özel karakterlerin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	stripcslashes()	:	Belirtilecek olan içerikte bulunan ve önüne \ (ters slash) yani kaçırma operatörü eklenmiş olan tüm közel arakterlerin önünde bulunan \ (ters slash) yani kaçırma operatörlerini kaldırır ve aktif bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	quotemeta()		:	Belirtilecek olan içerikte bulunan, özel karakterlerin önüne \ (ters slash) yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür. Karakterler . $ \ ? + * ^ [ ] ( )
	*/
	
	$Icerik		=	"Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti";
	
	echo $Icerik . "<br />";
	
	$YeniIcerik	=	addcslashes($Icerik, "'");
	
	echo $YeniIcerik . "<br />";
	
	$SonIcerik	=	stripcslashes($Icerik);
	
	echo $SonIcerik;
	
	?>
</body>
</html>