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
	
	$Deger		=	99.99;
	
	$Sonuc		=	sprintf("Borcunuz %d TL'dir.", $Deger);
	
	echo $Sonuc;
	
	?>
</body>
</html>