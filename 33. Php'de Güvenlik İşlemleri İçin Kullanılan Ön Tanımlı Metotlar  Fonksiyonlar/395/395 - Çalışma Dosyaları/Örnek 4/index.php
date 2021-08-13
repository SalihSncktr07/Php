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
	$Olustur	=	crypt($Deger, "_Valakent"); // 9 karakterlik salt (tuz) kullanılmış DES şifrelemi.
	echo $Olustur;
	
	?>
</body>
</html>