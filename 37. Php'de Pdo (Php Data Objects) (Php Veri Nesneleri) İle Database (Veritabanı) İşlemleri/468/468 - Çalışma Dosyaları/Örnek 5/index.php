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
	INNER JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
	LEFT JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
	RIGHT JOIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun sağdaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
	NATURAL JOIN	:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerinin birbiri ile otomatik ilişkilendirilmesi için kullanılır.
	USING			:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
	ON				:	MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT uyeler.id AS KullaniciIDsi, uyeler.adisoyadi AS KullaniciIsimSoyisim, uyeler.emailadresi AS KullaniciEmail, uyeler.sifre AS KullaniciSifre, uyeler.telefon AS KullaniciTelefon, uyeler.yas AS KullaniciYas, uyeler.cinsiyet AS KullaniciCinsiyet, uyeler.sehir AS KullaniciSehir, uyeler.kayittarihi AS KullaniciKayitTarihi, sipariler.id AS KullaniciSipariID, sipariler.uyeid AS KullaniciUyeID, sipariler.urunadi AS KullaniciAldigiUrun, sipariler.urunfiyati AS KullaniciAldigiUrunFiyati, istatistikler.id AS KullaniciIstatistikID, istatistikler.uyeid AS KullaniciIstatistiUyeID, istatistikler.siteyegirissayisi AS KullaniciSiteyeGirisSayisi, istatistikler.siparissayisi AS KullaniciSiparisSayisi FROM uyeler INNER JOIN sipariler ON uyeler.id = sipariler.uyeid INNER JOIN istatistikler ON uyeler.id = istatistikler.uyeid", PDO::FETCH_ASSOC);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					foreach($Sorgu as $Satirlar){
						echo $Satirlar["KullaniciIDsi"] . " | " . $Satirlar["KullaniciIsimSoyisim"] . " | " . $Satirlar["KullaniciEmail"] . " | " . $Satirlar["KullaniciSifre"] . " | " . $Satirlar["KullaniciTelefon"] . " | " . $Satirlar["KullaniciYas"] . " | " . $Satirlar["KullaniciCinsiyet"] . " | " . $Satirlar["KullaniciSehir"] . " | " . $Satirlar["KullaniciKayitTarihi"] . " | " . $Satirlar["KullaniciSipariID"] . " | " . $Satirlar["KullaniciUyeID"] . " | " . $Satirlar["KullaniciAldigiUrun"] . " | " . $Satirlar["KullaniciAldigiUrunFiyati"] . " | " . $Satirlar["KullaniciIstatistikID"] . " | " . $Satirlar["KullaniciIstatistiUyeID"] . " | " . $Satirlar["KullaniciSiteyeGirisSayisi"] . " | " . $Satirlar["KullaniciSiparisSayisi"] . "<br />";
					}
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası A";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>