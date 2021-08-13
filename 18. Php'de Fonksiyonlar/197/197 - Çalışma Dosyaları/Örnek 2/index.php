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
	
	function Bir($Isim, $Soyisim){
		
		function Iki($Meslek, $Yas){
			
			return "Yaş : " . $Yas . "<br />Meslek : " . $Meslek;
			
		}

		return "İsim Soyisim : " . $Isim . " " . $Soyisim . "<br />";
		
	}
	
	$IsimSoyisimBilgisi		=	Bir("Volkan", "Alakent");
	$YasVeMeslekBilgisi		=	Iki("Bilgisayar programlama ve yazılım geliştirme uzamanı", 38);
	
	echo $IsimSoyisimBilgisi;
	echo $YasVeMeslekBilgisi;
	
	?>
</body>
</html>