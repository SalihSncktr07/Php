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
	$Oturum		=	curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "https://www.sahibinden.com/ferrari?pagingSize=50&sorting=price_desc");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	// echo $Sonuc;
	preg_match_all('/src="(.*?)" /', $Sonuc, $Degerler);
	$TemizDizi	=	array_unique($Degerler[1]);
	/* echo "<pre>";
	print_r($TemizDizi);
	echo "</pre>"; */
	
	foreach($TemizDizi as $Icerik){
		$UzantiBul	=	substr($Icerik, -4);
		if(($UzantiBul == "jpeg") or ($UzantiBul == ".jpg") or ($UzantiBul == ".png") or ($UzantiBul == ".bmp") or ($UzantiBul == ".gif") ){
			// echo $Icerik . "<br />";
			$Parcala	=	explode("/", $Icerik);
			/* echo "<pre>";
			print_r($Parcala);
			echo "</pre>"; */
			$ParcalaSon	=	end($Parcala);
			echo $ParcalaSon . "<br />";
			
			$YenidenUzantiBul	=	substr($ParcalaSon, -4);
				if($YenidenUzantiBul == "jpeg"){
					$DosyaAdiIcinUzanti		=	"." . $YenidenUzantiBul;
				}else{
					$DosyaAdiIcinUzanti		=	$YenidenUzantiBul;
				}
			$Isimlendirme		=	md5(uniqid(mt_rand()));
			$DosyaAdiOlustur	=	$Isimlendirme . $DosyaAdiIcinUzanti;
			
			$Dosya 		=	file_get_contents($Icerik);
				if($Dosya){
					file_put_contents($DosyaAdiOlustur, $Dosya);
				}
		}
	}
	?>
</body>
</html>