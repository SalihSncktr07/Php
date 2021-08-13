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
	CURLFile()	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a (sunucuya) dosya yüklemek için kullanılır.
	*/
	
	$Oturum		=	curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/Sonuc.php");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Oturum, CURLOPT_POST, true);
	curl_setopt($Oturum, CURLOPT_POSTFIELDS, [
		"Dosya" => new CURLFile(__DIR__ . "/Yuklenecekler/Ornek.jpg", "image/png")
	]);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	echo $Sonuc;
	
	?>
</body>
</html>