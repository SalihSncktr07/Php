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
	
	function Islem($Isim, $Soyisim, $Yas){
		
		echo "Gelen İsim : " . $Isim . "<br />";
		echo "Gelen Soyisim : " . $Soyisim . "<br />";
		echo "Gelen Yaş : " . $Yas;
		
	}
	
	Islem("Volkan", "Alakent", 38);
	
	?>
</body>
</html>