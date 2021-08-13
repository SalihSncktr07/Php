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
	get_loaded_extensions()		:	PHP yazılımı içerisinde derlenmiş ve yüklenmiş sisteme tanımlı olan tüm modüllerin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_extension_funcs()		:	PHP yazılımı içerisinde derlenmiş ve yüklenmiş sisteme tanımlı ve belirtilecek olan modülün tüm fonksiyonlarının listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	echo "<pre>";
	print_r(get_loaded_extensions());
	echo "</pre>";
	
	?>
</body>
</html>