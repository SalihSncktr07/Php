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
	
	($IslemYap	=	function($Isim="", $Soyisim="", $Yas=""){
		if($Isim!=""){
			echo "İsim : " . $Isim . "<br />";
		}
		
		if($Soyisim!=""){
			echo "Soyisim : " . $Soyisim . "<br />";
		}
		
		if($Yas!=""){
			echo "Yaş : " . $Yas . "<br />";
		}
		
	})("Volkan", "", 38);
	
	?>
</body>
</html>