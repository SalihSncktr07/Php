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
	mysqli_connect()		:	Kendisine parametre olarak verilen değerler doğrultusunda, MySQL sunucusuna yeni bir bağlantı açmak için kullanılır. Ayrıca isternirse açılacak olan MySQL sunucusunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	mysqli_set_charset()	:	Kendisine parametre olarak verilen değerler doğrultusunda, daha önceden açılmış olan MySQL bağlantısına varsayılan istemci karakter setini atamak / tanımlamak için kullanılır.
	mysqli_select_db()		:	Kendisine parametre olarak verilen değerler doğrultusunda, daha önceden açılmış olan MySQL bağlantısı üzerinden istenilen veritabanını seçmek için kullanılır.
	mysqli_connect_errno()	:	MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata kodu değerini bularak, bulduğu değeri geriye döndürür.
	mysqli_connect_error()	:	MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür.
	mysqli_close()			:	Kendisine parametre olarak verilen değerler doğrultusunda, daha önceden açılmış olan MySQL bağlantısını kapatmak / sonlandırmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi			=	mysqli_connect("127.0.0.1", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	echo "<pre>";
	print_r($VeritabaniBaglantisi);
	echo "</pre>";
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>