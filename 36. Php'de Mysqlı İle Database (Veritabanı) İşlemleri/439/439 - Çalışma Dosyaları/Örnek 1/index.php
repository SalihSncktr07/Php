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
	mysqli_num_rows()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun toplam kayıt sayısını elde etmek için kullanılır.
	num_rows			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile toplam kayıt sayısını elde etmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Açıklama : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
			
			echo "kisiler tablosu içerisinde bulunan kayıt sayısı : " . $KayitSayisi . "<br /><br />";
			
			while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
				echo $Kayitlar["id"] . " & " . $Kayitlar["isim"] . " & " . $Kayitlar["yas"] . " & " . $Kayitlar["beceriler"] . " & " . $Kayitlar["beceriseviyeleri"] . "<br />";
			}
			
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>