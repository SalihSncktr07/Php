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
	mysqli_init()			:	MySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
	mysqli_real_connect()	:	mysqli_init() metodu kullanılarak açılmış olan yeni MySQL bağlantısına, bağlantı bilgilerini atamak / tanımlamak için kullanılır.
	real_connect()			:	mysqli_init() metodu kullanılarak nesnesel yapı ile açılmış olan yeni MySQL bağlantısına, bağlantı bilgilerini atamak / tanımlamak için kullanılır.
	*/
	
	$VeritabaniBaglantisi		=	@mysqli_init();
	@$VeritabaniBaglantisi->real_connect("localhost", "root", "", "extraegitim");
	@$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
	}else{
		echo "Bağlantı Kuruldu";
	}
	
	@$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>