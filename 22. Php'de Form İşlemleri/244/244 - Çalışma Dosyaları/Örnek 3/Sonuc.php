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
		$GelenAdiSoyadi			=	$_REQUEST["Isim"];
		$GelenHobiler			=	$_REQUEST["Hobiler"];
	
		echo "Adınız Soyadınız : " . $GelenAdiSoyadi . "<br />";
		echo "Hobileriniz :<br />";
	
		foreach($GelenHobiler as $Bilgiler){
			echo $Bilgiler . "<br />";
		}
	
	?>
</body>
</html>