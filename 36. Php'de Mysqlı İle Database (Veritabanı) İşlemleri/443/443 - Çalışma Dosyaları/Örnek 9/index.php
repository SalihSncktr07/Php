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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "SELECT sehir, MIN(siparistoplamtutarlari) AS MinimumTutar, MAX(siparistoplamtutarlari) AS MaksimumTutar, SUM(siparistoplamtutarlari) AS ToplamTutar FROM kayitlar GROUP BY sehir HAVING ToplamTutar>0");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					echo "Üyelere Ait Şehirler<br /><br />";
					
					while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
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
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>