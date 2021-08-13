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
	
	$SorguA		=	$VeritabaniBaglantisi->query("SELECT DISTINCT sehir FROM kayitlar");
		if($SorguA){
			$KayitSayisi	=	$SorguA->num_rows;
				if($KayitSayisi>0){
					echo "Üyelere Ait Şehirler ve Kayıtları<br /><br />";
					
					while($Kayitlar=$SorguA->fetch_assoc()){
						echo $Kayitlar["sehir"] . "<br />";
						
						$SorguB		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar WHERE sehir='" . $Kayitlar["sehir"] . "'");
							if($SorguB){
								$KayitSayisiIki	=	$SorguB->num_rows;
									if($KayitSayisiIki>0){
										while($KayitlarIki=$SorguB->fetch_assoc()){
											echo $KayitlarIki["adisoyadi"] . "<br />";
										}
									}else{
										echo "Kayıt Yok";
									}
							}else{
								echo "Sorgu Hatası";
							}
						
						echo "<br />";
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