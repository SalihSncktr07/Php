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
	
	$SorguA		=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
		if($SorguA){
			$KayitSayisiA	=	$SorguA->rowCount();
				if($KayitSayisiA>0){
					foreach($SorguA as $SatirlarA){
						$SorguB		=	$VeritabaniBaglantisi->query("SELECT * FROM sipariler WHERE uyeid=". $SatirlarA["id"], PDO::FETCH_ASSOC);
							if($SorguB){
								$KayitSayisiB	=	$SorguB->rowCount();
									if($KayitSayisiB>0){
										foreach($SorguB as $SatirlarB){
											echo $SatirlarA["id"] . " | " . $SatirlarA["adisoyadi"] . " | " . $SatirlarA["emailadresi"] . " | " . $SatirlarA["sifre"] . " | " . $SatirlarA["telefon"] . " | " . $SatirlarA["yas"] . " | " . $SatirlarA["cinsiyet"] . " | " . $SatirlarA["sehir"] . " | " . $SatirlarA["kayittarihi"] . " | ";
											echo $SatirlarB["id"] . " | " . $SatirlarB["uyeid"] . " | " . $SatirlarB["urunadi"] . " | " . $SatirlarB["urunfiyati"] . "<br />";
										}
									}
							}else{
								echo "Sorgu Hatası B";
							}
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