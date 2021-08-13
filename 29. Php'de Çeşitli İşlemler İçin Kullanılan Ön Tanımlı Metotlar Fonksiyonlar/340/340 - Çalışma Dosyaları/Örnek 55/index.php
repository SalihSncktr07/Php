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
	
	$DegerBir		=	1;
	$DegerIki		=	10;
	$DegerUc		=	100;
	$DegerDort		=	1000;
	$DegerBes		=	10000;
	
	printf("%d", $DegerBir);
	echo "<br />";
	printf("%d", $DegerIki);
	echo "<br />";
	printf("%d", $DegerUc);
	echo "<br />";
	printf("%d", $DegerDort);
	echo "<br />";
	printf("%d", $DegerBes);
	
	echo "<br /><br /><br /><br /><br />";

	printf("%05d", $DegerBir);
	echo "<br />";
	printf("%05d", $DegerIki);
	echo "<br />";
	printf("%05d", $DegerUc);
	echo "<br />";
	printf("%05d", $DegerDort);
	echo "<br />";
	printf("%05d", $DegerBes);
	
	?>
</body>
</html>