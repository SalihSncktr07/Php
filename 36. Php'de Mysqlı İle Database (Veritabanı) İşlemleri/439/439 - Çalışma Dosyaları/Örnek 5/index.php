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
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Açıklama : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler WHERE beceriler LIKE ('%Javascript%')");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
			
			echo "kisiler tablosu içerisinde bulunan kayıt sayısı : " . $KayitSayisi . "<br /><br />";
			
			while($Kayitlar=$Sorgu->fetch_assoc()){
				echo $Kayitlar["id"] . " & " . $Kayitlar["isim"] . " & " . $Kayitlar["yas"] . " & " . $Kayitlar["beceriler"] . " & " . $Kayitlar["beceriseviyeleri"] . "<br />";
			}
			
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>