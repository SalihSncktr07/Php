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
	CURLOPT_POST		:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.
	CURLOPT_POSTFIELDS	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işleminde gönderilecek olan veri / verileri tanımlamak için kullanılır.
	*/
	
	$Oturum		=	curl_init();
	curl_setopt_array($Oturum, [
		CURLOPT_URL => "http://localhost/ExtraEgitim/Sonuc.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => [
			"AdiSoyadi" => "Volkan Alakent", 
			"EmailAdresi" => "info@extraegitim.com", 
			"Telefon" => "05352255144",
			"Cinsiyet" => "Erkek",
			"Yas" => 38
		]
	]);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	echo $Sonuc;
	
	?>
</body>
</html>