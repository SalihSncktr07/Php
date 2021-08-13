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
	mysqli_fetch_lengths()	:	MySQL sunucusundaki database içerisinde buunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki tüm sütunlarda bulunan verilerin ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
	lengths					:	MySQL sunucusundaki database içerisinde buunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki tüm sütunlarda bulunan verilerin nesnesel yapı ile ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Hata Oluştu. Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
				if($KayitSayisi>0){
					while($Kayitlar=$Sorgu->fetch_assoc()){
						$SutunKarakterSayisi	=	$Sorgu->lengths;
						echo "<pre>";
						print_r($SutunKarakterSayisi);
						echo "</pre>";
					}
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>