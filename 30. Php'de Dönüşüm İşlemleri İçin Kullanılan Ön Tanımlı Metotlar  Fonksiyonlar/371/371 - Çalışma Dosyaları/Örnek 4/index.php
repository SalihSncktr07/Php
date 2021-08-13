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
	
	$DegerBir			=	"https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php";
	$DegerIki			=	"https%3A%2F%2Fwww.extraegitim.com%2Fana%20sayfa.php";
	$DegerUc			=	"https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26KimlikBilgisi%3DVolkanAlakent";
	$DegerDort			=	"https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26KimlikBilgisi%3DVolkan%20Alakent";
	
	$IslemBir			=	rawurldecode($DegerBir);
	$IslemIki			=	rawurldecode($DegerIki);
	$IslemUc			=	rawurldecode($DegerUc);
	$IslemDort			=	rawurldecode($DegerDort);
	
	
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