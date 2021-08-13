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
	mysqli_fetch_row()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini numaralandırılmış bir dizi halinde okumak için kullanılır.
	fetch_row()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini numaralandırılmış bir dizi halinde okumak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler");
		if($Sorgu){
			while($Kayit=$Sorgu->fetch_row()){
				echo "Kayıt ID Değeri : " . $Kayit[0] . "<br />";
				echo "Kayıt İsim Değeri : " . $Kayit[1] . "<br />";
				echo "Kayıt Yaş Değeri : " . $Kayit[2] . "<br />";
				echo "Kayıt Beceriler Değeri : " . $Kayit[3] . "<br />";
				echo "Kayıt Beceri Seviyeleri Değeri : " . $Kayit[4] . "<br /><br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>