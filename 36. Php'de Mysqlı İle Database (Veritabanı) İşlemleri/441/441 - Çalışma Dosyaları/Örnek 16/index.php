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
	INNER JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun eşleşen değerlerinin birbirleri ile ilişkilendirilmesi için kullanılır.
	LEFT JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun soldaki tabloya göre birbirleri ile ilişkilendirilmesi için kullanılır.
	RIGHT JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun sağdaki tabloya göre birbirleri ile ilişkilendirilmesi için kullanılır.
	NATURAL JOIN	:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun eşleşen değerlerinin birbirleri ile otomatik ilişkilendirilmesi için kullanılır.
	
	USING			:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
	ON				:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya dafa fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Açıklama : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "SELECT uyeler.id AS UyeID, uyeler.adisoyadi AS UyeAdSoyad, uyeler.yas AS UyeYas, uyeler.sehir AS UyeSehir, sipariler.urunadi AS SiparislerUrunAdi, sipariler.urunfiyati AS SiparislerUrunFiyati FROM uyeler RIGHT JOIN sipariler ON uyeler.id = sipariler.uyeid");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
						echo "Üyenin ID Değeri : " . $Kayitlar["UyeID"] . "<br />";
						echo "Üyenin İsim Soyisim Değeri : " . $Kayitlar["UyeAdSoyad"] . "<br />";
						echo "Üyenin Yaş Değeri : " . $Kayitlar["UyeYas"] . "<br />";
						echo "Üyenin Şehir Değeri : " . $Kayitlar["UyeSehir"] . "<br />";
						echo "Üyenin Aldığı Ürün Adı Değeri : " . $Kayitlar["SiparislerUrunAdi"] . "<br />";
						echo "Üyenin Aldığı Ürün Fiyatı Değeri : " . $Kayitlar["SiparislerUrunFiyati"] . "<br /><br />";
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