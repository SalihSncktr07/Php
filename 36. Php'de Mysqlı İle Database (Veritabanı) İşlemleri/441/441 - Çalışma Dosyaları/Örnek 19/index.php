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
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler NATURAL JOIN istatistikler");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
						echo "Üyenin ID Değeri : " . $Kayitlar["id"] . "<br />";
						echo "Üyenin İsim Soyisim Değeri : " . $Kayitlar["adisoyadi"] . "<br />";
						echo "Üyenin Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
						echo "Üyenin Şehir Değeri : " . $Kayitlar["sehir"] . "<br />";
						echo "Üyenin Siteye Giriş Sayısı Değeri : " . $Kayitlar["siteyegirissayisi"] . "<br />";
						echo "Üyenin Sipariş Sayısı Değeri : " . $Kayitlar["siparissayisi"] . "<br /><br />";
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