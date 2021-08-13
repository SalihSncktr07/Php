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
	DISTINCT		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
	GROUP BY		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.
	HAVING			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT sehir, MIN(siparistoplamtutarlari) AS MinimumTutar, MAX(siparistoplamtutarlari) AS MaksimumTutar, SUM(siparistoplamtutarlari) AS ToplamTutar FROM kayitlar GROUP BY sehir HAVING ToplamTutar>0");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
				if($KayitSayisi>0){
					echo "Üyelere Ait Şehirler<br /><br />";
					
					while($Kayitlar=$Sorgu->fetch_assoc()){
						echo $Kayitlar["sehir"] . "<br />";
						echo "Minimum Sipariş Tutarı : " . $Kayitlar["MinimumTutar"] . "<br />";
						echo "Maksimum Sipariş Tutarı : " . $Kayitlar["MaksimumTutar"] . "<br />";
						echo "Toplam Sipariş Tutarı : " . $Kayitlar["ToplamTutar"] . "<br /><br />";
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