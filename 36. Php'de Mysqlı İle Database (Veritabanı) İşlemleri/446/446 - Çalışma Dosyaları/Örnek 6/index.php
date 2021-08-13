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
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_errno;
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
			if($KayitSayisi>0){
					while($Kayitlar=$Sorgu->fetch_assoc()){
						echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["emailadresi"] . " | " . $Kayitlar["sifre"] . " | " . $Kayitlar["telefon"] . " | " . $Kayitlar["yas"] . " | " . $Kayitlar["cinsiyet"] . " | " . $Kayitlar["sehir"] . " | " . $Kayitlar["kayittarihi"] . " | <a href='guncelle.php?id=" . $Kayitlar["id"] ."'>Güncelle</a><br />";
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