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
	LIMIT 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.
	ORDER BY	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra / sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler ORDER BY yas ASC, isim DESC");
		if($Sorgu){
			while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
				echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
				echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
				echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
				echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
				echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>