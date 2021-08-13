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
	CURLOPT_FILE	:	Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin aktarılacağı dosyayı tanımlamak için kullanılır.
	*/
	
	$Dosya		=	fopen("Deneme.txt", "w");
	$Oturum		=	curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "https://www.mynet.com");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Oturum, CURLOPT_FILE, $Dosya);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	if($Sonuc == 1){
		echo "Dosya Başarıyla İndirildi.";
	}else{
		echo "Dosya İndirme İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.";
	}
	
	?>
</body>
</html>