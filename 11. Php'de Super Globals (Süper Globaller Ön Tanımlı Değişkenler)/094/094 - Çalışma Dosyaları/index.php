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
	$_COOKIE	:	Herhangi bir kullanıcının browser’ına (tarayıcısına) yerleştirilmiş olan cookie (çerez) verilerine ulaşılabilme imkanı tanır.
	*/
	
	//setcookie("Extra", "Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti");
	
	$Cerez	=	$_COOKIE["Extra"];
	echo $Cerez;
	
	?>
</body>
</html>