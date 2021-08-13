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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$GelenIsim		=	$_POST["isim"];
	$GelenYas		=	$_POST["yas"];
	$GelenBeceri	=	$_POST["beceri"];
	$GelenSeviye	=	$_POST["seviyeler"];
	
	$Ekle		=	$VeritabaniBaglantisi->query("INSERT INTO kisiler (isim, yas, beceriler, beceriseviyeleri) values ('$GelenIsim', '$GelenYas', '$GelenBeceri', '$GelenSeviye')");
		if($Ekle){
			header("Location:index.php");
			exit();
		}else{
			echo "Sorgu Hatası";
		}
	
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>