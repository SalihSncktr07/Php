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
	urlencode()			:	Belirtilecek olan içeriğin URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlamasını bularak, bulduğu değeri geriye döndürür.
	urldecode()			:	Belirtilecek olan ve URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	rawurlencode()		:	Belirtilecek olan içeriğin URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlamasını bularak, bulduğu değeri geriye döndürür.
	rawurldecode()		:	Belirtilecek olan ve URL Encoding (Uniform Resource Locator Encoding) (nizami kaynak bulucu kodlaması) karakter kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	*/
	
	$DegerBir			=	"https://www.extraegitim.com/anasayfa.php";
	$DegerIki			=	"https://www.extraegitim.com/ana sayfa.php";
	$DegerUc			=	"https://www.extraegitim.com/anasayfa.php?ID=144&KimlikBilgisi=VolkanAlakent";
	$DegerDort			=	"https://www.extraegitim.com/anasayfa.php?ID=144&KimlikBilgisi=Volkan Alakent";
	
	$IslemBir			=	urlencode($DegerBir);
	$IslemIki			=	urlencode($DegerIki);
	$IslemUc			=	urlencode($DegerUc);
	$IslemDort			=	urlencode($DegerDort);
	
	
	echo $DegerBir . "<br />";
	echo $IslemBir . "<br /><br />";
	
	echo $DegerIki . "<br />";
	echo $IslemIki . "<br /><br />";

	echo $DegerUc . "<br />";
	echo $IslemUc . "<br /><br />";
	
	echo $DegerUc . "<br />";
	echo $IslemDort;
	
	?>
</body>
</html>