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
	
	$DegerBir		=	86; // V
	$DegerIki		=	111; // o
	$DegerUc		=	108; // l
	$DegerDort		=	107; // k
	$DegerBes		=	97; // a
	$DegerAlti		=	110; // n
	
	$Sonuc 			=	sprintf("İsim : %c%c%c%c%c%c", $DegerBir, $DegerIki, $DegerUc, $DegerDort, $DegerBes, $DegerAlti);
	
	echo $Sonuc;
	
	?>
</body>
</html>