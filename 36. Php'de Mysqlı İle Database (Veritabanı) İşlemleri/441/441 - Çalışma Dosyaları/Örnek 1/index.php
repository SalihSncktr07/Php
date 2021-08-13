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
	
	$SorguA		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($SorguA){
			$KayitSayisi	=	mysqli_num_rows($SorguA);
				if($KayitSayisi>0){
					while($Kayitlar=mysqli_fetch_assoc($SorguA)){
						$GelenID			=	$Kayitlar["id"];
						$GelenAdiSoyadi		=	$Kayitlar["adisoyadi"];
						$GelenYasi			=	$Kayitlar["yas"];
						$GelenSehri			=	$Kayitlar["sehir"];
						
						$SorguB		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM istatistikler WHERE uyeid=" . $GelenID ." LIMIT 1");
							if($SorguB){
								$KayitSayisiB	=	mysqli_num_rows($SorguB);
									if($KayitSayisiB>0){
										$Kayit	=	mysqli_fetch_assoc($SorguB);
										
										$GelenSiteGirisiSayisi		=	$Kayit["siteyegirissayisi"];
										$GelenSiparisSayisi			=	$Kayit["siparissayisi"];
									}else{
										$GelenSiteGirisiSayisi		=	"";
										$GelenSiparisSayisi			=	"";
									}
			
							}
						echo "Üyenin ID Değeri : " . $GelenID . "<br />";
						echo "Üyenin İsim Soyisim Değeri : " . $GelenAdiSoyadi . "<br />";
						echo "Üyenin Yaş Değeri : " . $GelenYasi . "<br />";
						echo "Üyenin Şehir Değeri : " . $GelenSehri . "<br />";
						echo "Üyenin Siteye Giriş Sayısı Değeri : " . $GelenSiteGirisiSayisi . "<br />";
						echo "Üyenin Sipariş Sayısı Değeri : " . $GelenSiparisSayisi . "<br /><br />";
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