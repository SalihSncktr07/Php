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
	filetype()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya mı yada dizin mi olduğunu bularak, bulduğu değeri geriye döndürür. (Dosya : file & klasör / Dizin : dir)
	fileowner()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi değerini bularak, bulduğu değeri geriye döndürür.
	filegroup()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi grubu değerini bularak, bulduğu değeri geriye döndürür.
	fileinode()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya düğüm numarası değerini bularak, bulduğu değeri geriye döndürür.
	fileperms()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya erişim izni değerini bularak, bulduğu değeri geriye döndürür.
	filesize()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya boyutu değerini bularak, bulduğu değeri geriye döndürür. (byte)
	filectime()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya oluşturulma tarihi değerini bularak, bulduğu değeri geriye döndürür.
	filemtime()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya değiştirilme tarihi değerini bularak, bulduğu değeri geriye döndürür.
	fileatime()		:	Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya son erişim tarihi değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya		=	"Ornek.rar";
	$Sor		=	filetype($Dosya);
	
	if($Sor=="file"){
		echo $Dosya . " içeriği bir  : Dosyadır.";
	}elseif($Sor=="dir"){
		echo $Dosya . " içeriği bir  : Dizindir.";
	}else{
		echo $Dosya . " içeriği bilinmiyor.";
	}
	
	echo "<br /><br />";
	
	$Dosya2		=	"Resimler";
	$Sor2		=	filetype($Dosya2);
	
	if($Sor2=="file"){
		echo $Dosya2 . " içeriği bir  : Dosyadır.";
	}elseif($Sor2=="dir"){
		echo $Dosya2 . " içeriği bir  : Dizindir.";
	}else{
		echo $Dosya2 . " içeriği bilinmiyor.";
	}
	
	?>
</body>
</html>