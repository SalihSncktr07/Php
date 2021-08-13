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
	curl_setopt($Oturum, CURLOPT_URL, "https://www.sahibinden.com/ferrari?pagingSize=50&sorting=yil-nu_desc");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	$Sonuc		=	curl_exec($Oturum);
	curl_close($Oturum);
	// echo $Sonuc;
	preg_match_all('/<img src="(.*?)"\/>/', $Sonuc, $Degerler);
	preg_match_all('/<a href="(.*?)\/detay">/', $Sonuc, $DegerlerLink);

	/* echo "<pre>";
	print_r($Degerler[1]);
	print_r($DegerlerLink[1]);
	echo "</pre>"; */

	$Sira	=	0;
	
	foreach($Degerler[1] as $Icerik){
		// echo $Icerik . "<br />";
		$Parcala	=	explode("\"", $Icerik);
		/* echo "<pre>";
		print_r($Parcala);
		echo "</pre>"; */
		if(isset($Parcala[4])){
			echo "<a href='https://www.sahibinden.com" . $DegerlerLink[1][$Sira] ."/detay' target='_blank'>" . $Parcala[4] . "</a><br />";
			echo "<a href='https://www.sahibinden.com" . $DegerlerLink[1][$Sira] ."/detay' target='_blank'><img src='" . $Parcala[0] . "'></a><br /><br />";
		}
		$Sira++;
	}
	?>
</body>
</html>