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
	
	?>
	<form action="sonuc.php" method="post">
		İsim : <input type="text" name="isim"><br />
		Yaş : <input type="number" name="yas"><br />
		Beceriler : <input type="tex" name="beceri"><br />
		Beceri Seviyeri : <input type="tex" name="seviyeler"><br />
		<input type="submit" value="Kaydet">
	</form>
	<br /><br />
	
	<?php
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_ASSOC);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					foreach($Sorgu as $Satirlar){
						echo $Satirlar["id"] . " | " . $Satirlar["isim"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["beceriler"] . " | " . $Satirlar["beceriseviyeleri"] . "<br />";
					}
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>