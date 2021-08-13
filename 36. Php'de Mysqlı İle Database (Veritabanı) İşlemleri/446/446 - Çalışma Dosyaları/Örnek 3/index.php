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
	UPDATE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri guncellemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . mysqli_connect_errno();
		die();
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
			if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
						echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["emailadresi"] . " | " . $Kayitlar["sifre"] . " | " . $Kayitlar["telefon"] . " | " . $Kayitlar["yas"] . " | " . $Kayitlar["cinsiyet"] . " | " . $Kayitlar["sehir"] . " | " . $Kayitlar["kayittarihi"] . " | <a href='guncelle.php?id=" . $Kayitlar["id"] ."'>Güncelle</a><br />";
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