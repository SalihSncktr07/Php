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
	
	$SorguA		=	mysqli_query($VeritabaniBaglantisi, "SELECT DISTINCT sehir FROM kayitlar");
		if($SorguA){
			$KayitSayisi	=	mysqli_num_rows($SorguA);
				if($KayitSayisi>0){
					echo "Üyelere Ait Şehirler ve Kayıtları<br /><br />";
					
					while($Kayitlar=mysqli_fetch_assoc($SorguA)){
						echo $Kayitlar["sehir"] . "<br />";
						
						$SorguB		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kayitlar WHERE sehir='" . $Kayitlar["sehir"] . "'");
							if($SorguB){
								$KayitSayisiIki	=	mysqli_num_rows($SorguB);
									if($KayitSayisiIki>0){
										while($KayitlarIki=mysqli_fetch_assoc($SorguB)){
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
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>