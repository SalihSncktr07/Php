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
	extension_loaded()	:	Belirtilecek olan PHP eklentisinin yüklü olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$EklentiAdi		=	"xml";
	
	if(extension_loaded($EklentiAdi)){
		echo "Kontrol etmiş olduğunuz <b>" . $EklentiAdi . "</b> eklentisi sisteme yüklüdür.";
	}else{
		echo "Kontrol etmiş olduğunuz <b>" . $EklentiAdi . "</b> eklentisi sisteme yüklü değildir.";
	}
	
	?>
</body>
</html>