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
	CURLOPT_NOBODY		:	Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin body (gövde) alanının alınmasını veya çıktılanmasını durdurmak için kullanılır.
	CURLOPT_HEADER		:	Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içerik ile birlikte HTTP üst bilgisininde bulunması / alınması gerektiğini belirtmek için kullanılır.
	CURLOPT_HTTPHEADER	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP üst bilgisi göndermek / tanımlamak için kullanılır.
	*/
	
	$Oturum		=	curl_init();
	curl_setopt_array($Oturum, [
		CURLOPT_URL => "http://localhost/ExtraEgitim/Ornek.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER => [
			"GuvenlikKodu: 1234567890ABCDEFG1234567890"
		]
	]);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	echo nl2br($Sonuc);
	
	?>
</body>
</html>