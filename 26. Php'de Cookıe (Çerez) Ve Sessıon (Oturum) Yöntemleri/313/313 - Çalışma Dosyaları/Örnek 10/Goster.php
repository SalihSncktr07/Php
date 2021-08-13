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
	setcookie()		:	Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kullanılır.
	Parametreler	:	1. Parametre : Çerez Adı, 2. Parametre : Çerez Değeri, 3. Parametre : Çerez Yaşam Süresi
	*/
	
	if(isset($_COOKIE["KullaniciAdi"])){
		echo "Kullanıcının Adı : " . $_COOKIE["KullaniciAdi"] . "<br />";
	}
	
	if(isset($_COOKIE["KullaniciSoyadi"])){
		echo "Kullanıcının Soyadı : " . $_COOKIE["KullaniciSoyadi"] . "<br />";
	}
	
	if(isset($_COOKIE["EgitimAdi"])){
		echo "Eğitimin Adı : " . $_COOKIE["EgitimAdi"];
	}
	
	?>
</body>
</html>