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
	
	$Oturum		=	curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/Sonuc.php");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Oturum, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($Oturum, CURLOPT_POST, true);	
	curl_setopt($Oturum, CURLOPT_POSTFIELDS, ["KullaniciAdi" => "Volkan", "KullaniciSifre" => "12345678"]);
	curl_setopt($Oturum, CURLOPT_COOKIE, "Kullanici=Volkan");
	curl_setopt($Oturum, CURLOPT_COOKIEJAR, __DIR__ . "/cerez.txt");
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	echo $Sonuc;
	
	$OturumIki	=	curl_init();
	curl_setopt($OturumIki, CURLOPT_URL, "http://localhost/ExtraEgitim/KontrolluBirinciSayfa.php");
	curl_setopt($OturumIki, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($OturumIki, CURLOPT_COOKIEFILE, __DIR__ . "/cerez.txt");
	$SonucIki		=	curl_exec($OturumIki);
	curl_close($OturumIki);
	echo $SonucIki;
	
	$OturumUc	=	curl_init();
	curl_setopt($OturumUc, CURLOPT_URL, "http://localhost/ExtraEgitim/KontrolluIkinciSayfa.php");
	curl_setopt($OturumUc, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($OturumUc, CURLOPT_COOKIEFILE, __DIR__ . "/cerez.txt");
	$SonucUc		=	curl_exec($OturumUc);
	curl_close($OturumUc);
	echo $SonucUc;
	
	?>
</body>
</html>