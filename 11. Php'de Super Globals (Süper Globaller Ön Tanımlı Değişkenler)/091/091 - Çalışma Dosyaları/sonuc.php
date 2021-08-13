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
	$_POST	:	İstek gönderim tag’ları (etiketleri) aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle kapalı yöntemle gelen istekler ve form işleme işlemleri için kullanılmaktadır.
	*/
	
	$Isim		=	$_POST["ad"];
	$Soyisim	=	$_POST["soyad"];
	
	echo $Isim . " " . $Soyisim;
	
	?>
</body>
</html>