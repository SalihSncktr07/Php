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
	printf()	:	Belirtilecek olan içeriğin, biçimli bir yapıya göre ekran çıktılanmasını sağlamak için kullanılır.
	sprintf()	:	Belirtilecek olan içeriğin, biçimli bir yapıya göre yeni bir değişken içerisine depolanmasını sağlamak için kullanılır.
	*/
	
	$Bir	=	5;
	$Iki	=	8;
	
	echo $Bir + $Iki . "<br />";
	
	$SonucBir	=	sprintf($Bir + $Iki);
	
	echo $SonucBir;
	
	echo "<br />";
	
	$SonucIki	=	sprintf("%s + %s", $Bir, $Iki);
	
	echo $SonucIki;

	?>
</body>
</html>