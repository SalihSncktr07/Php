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
	crypt()		:	Belirtilecek olan içeriğin tek yönlü gelişmiş bir şekilde şifrelemesini yaparak, şifrelediği değeri geriye döndürür.
	*/
	
	$Deger		=	"Extra Eğitim";
	
	$OlusturBir	=	crypt($Deger, "Va"); // 2 karakterlik salt (tuz) kullanılmış DES şifrelemi.
	echo $OlusturBir . "<br />";
	
	$OlusturIki	=	crypt($Deger, "_Valakent"); // 9 karakterlik salt (tuz) kullanılmış DES şifrelemi.
	echo $OlusturIki . "<br />";
	
	$OlusturUc	=	crypt($Deger, '$1$Alakent_$'); // 12 karakterlik salt (tuz) kullanılmış MD5 şifrelemi.
	echo $OlusturUc . "<br />";
	
	?>
</body>
</html>