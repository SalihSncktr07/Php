<?php
session_start();
?>
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
	CURLOPT_COOKIE		:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan yeni cookie (çerez) / cookie'ler (çerezler) oluşturmak için kullanılır.
	CURLOPT_COOKIEJAR	:	Başlatılmış olan bir CURL oturumu sonlandırıldığında / kapatıldığında daha önceden oluşmuş olan cookie'lerin (çerezlerin) kaydedileceği dosyayı tanımlamak için kullanılır.
	CURLOPT_COOKIEFILE	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresinde kullanılacak olan cookie'lerin (çerezlerin) tutulduğu dosyayı belirtmek ve içeriğindeki değerleri karşı server'a (sunucuya) iletmek için kullanılır.
	*/
	?>
	<form action="Sonuc.php" method="post">
		Kullanıcı Adı : <input type="text" name="KullaniciAdi"><br />
		Şifre : <input type="password" name="KullaniciSifre"><br />
		<input type="submit" value="Giriş Yap">
	</form>
</body>
</html>