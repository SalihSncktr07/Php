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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Hata Oluştu. Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
						$SutunKarakterSayisi	=	mysqli_fetch_lengths($Sorgu);
						
						echo "ID Değeri : " . $Kayitlar["id"] . " Karakter Uzunluğu : " . $SutunKarakterSayisi[0] . "<br />";
						echo "İsim Değeri : " . $Kayitlar["isim"] . " Karakter Uzunluğu : " . $SutunKarakterSayisi[1] . "<br />";
						echo "Yaş Değeri : " . $Kayitlar["yas"] . " Karakter Uzunluğu : " . $SutunKarakterSayisi[2] . "<br />";
						echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . " Karakter Uzunluğu : " . $SutunKarakterSayisi[3] . "<br />";
						echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . " Karakter Uzunluğu : " . $SutunKarakterSayisi[4] . "<br /><br />";
					}
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>