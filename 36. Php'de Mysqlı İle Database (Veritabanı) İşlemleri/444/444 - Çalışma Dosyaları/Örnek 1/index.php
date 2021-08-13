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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Ekle	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Esra Deneme', 'tarik@extraegitim.com', '72528267', '05410000000', '47', 'Kadın', 'Hatay')");
		if($Ekle){
			echo "Kayıt Başarıyla Eklendi.<br /><br />";
		}else{
			echo "Sorgu Hatası<br /><br />";
		}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_object($Sorgu)){
						echo "ID Değeri : " . $Kayitlar->id . "<br />"; 
						echo "İsim Soyisim Değeri : " . $Kayitlar->adisoyadi . "<br />"; 
						echo "E-Mail Adresi Değeri : " . $Kayitlar->emailadresi . "<br />"; 
						echo "Şifre Değeri : " . $Kayitlar->sifre . "<br />"; 
						echo "Telefon Değeri : " . $Kayitlar->telefon . "<br />"; 
						echo "Yaş Değeri : " . $Kayitlar->yas . "<br />"; 
						echo "Cinsiyet Değeri : " . $Kayitlar->cinsiyet . "<br />"; 
						echo "Şehir Değeri : " . $Kayitlar->sehir . "<br />"; 
						echo "Kayıt Tarihi Değeri : " . $Kayitlar->kayittarihi . "<br /><br />"; 
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