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
	php_ini_loaded_file()	:	PHP yapılandırma yönergelerinin bulunduğu php.ini dosyasının içerisinde bulunduğu dizin / dizinlerin adını / adlarını bularak, bulduğu değeri geriye döndürür.
	ini_get_all()			:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan tüm yapılandırma yönergeleri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca belirtilecek olan değer doğrultusunda tüm yapılandırma yönergeleri yerine sadece ilgili yapılandırma yönergesi değerinide döndürebilir.
	ini_get()				:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesinin değerini bularak, bulduğu değeri geriye döndürür.
	ini_set()				:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesine, değer atamak için kullanılır.
	ini_restore()			:	PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesinin, ini_set() metodu kullanılarak değiştirilmiş olan değerini varsayılan haline geri döndürmek için kullanılır.
	parse_ini_file()		:	PHP yazılımı içerisinde kullanılabilecek ve yazılımcı tarafından oluşturulmuş olan tüm yapılandırma yönergeleri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	echo "upload_max_filesize değeri : " . ini_get("upload_max_filesize") . "<br />";
	echo "max_file_uploads değeri : " . ini_get("max_file_uploads") . "<br />";
	echo "display_errors değeri : " . ini_get("display_errors");
	
	?>
</body>
</html>