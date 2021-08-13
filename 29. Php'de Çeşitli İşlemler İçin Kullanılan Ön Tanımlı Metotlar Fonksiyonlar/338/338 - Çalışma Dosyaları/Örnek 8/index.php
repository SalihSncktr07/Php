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
	unset()		:	Belirtilecek olan değişkeni, dizi anahtarını ve elemanını veya session'ı (oturumu) silmek / yok etmek için kullanılır.
	*/
	
	$_SESSION["Kullanici"]		=	"Volkan";
	$_SESSION["Email"]			=	"info@extraegitim.com";
	
	echo $_SESSION["Kullanici"] . "<br />";
	echo $_SESSION["Email"] . "<br /><br />";
	
	
	unset($_SESSION["Kullanici"]);
	
	echo $_SESSION["Kullanici"] . "<br />"; // Hata kodu döndürür, çünkü unset() metodu ile Kullanici adındaki session (oturum) yok edildi.
	echo $_SESSION["Email"];
	
	?>
</body>
</html>