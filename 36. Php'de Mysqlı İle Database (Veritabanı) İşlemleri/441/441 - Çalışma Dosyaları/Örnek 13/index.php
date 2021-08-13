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
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Açıklama : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler LEFT JOIN sipariler ON uyeler.id = sipariler.uyeid");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
				if($KayitSayisi>0){
					while($Kayitlar=$Sorgu->fetch_assoc()){
						echo "Üyenin ID Değeri : " . $Kayitlar["id"] . "<br />";
						echo "Üyenin İsim Soyisim Değeri : " . $Kayitlar["adisoyadi"] . "<br />";
						echo "Üyenin Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
						echo "Üyenin Şehir Değeri : " . $Kayitlar["sehir"] . "<br />";
						echo "Üyenin Aldığı Ürün Adı Değeri : " . $Kayitlar["urunadi"] . "<br />";
						echo "Üyenin Aldığı Ürün Fiyatı Değeri : " . $Kayitlar["urunfiyati"] . "<br /><br />";
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