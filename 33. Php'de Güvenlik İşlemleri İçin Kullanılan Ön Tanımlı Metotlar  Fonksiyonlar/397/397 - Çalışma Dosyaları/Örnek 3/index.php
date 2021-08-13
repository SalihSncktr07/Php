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
	hash_hmac_algos()	:	PHP yazılımı içerisinde anahtarlı olarak HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile kullanılabilecek olan sisteme tanımlı tüm algoritmaların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	hash_hmac()			:	Belirtilecek olan içeriğin HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
	hash_hmac_file()	:	Belirtilecek olan dosyanın HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
	*/
	
	$Dosya		=	"Oku.txt";
	echo "Orjinal dosya adı : " . $Dosya . "<br />";
	
	$Uret		=	hash_hmac_file("md5", $Dosya, "GizliAnahtar");
	echo $Dosya . " md5 algoritması kullanılarak üretilmiş hash : " . $Uret . "<br />";
	
	?>
</body>
</html>