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
	goto	:	Kodlama dosyası içerisinde belirtilecek olan imlenmiş / hedeflenmiş satıra atlama koşulunu sağlamak için kullanılır.
	
	Yapısı :
	goto Yerimiz
	
	Yerimiz:
	*/
	
	$Deger	=	3;
	
	if($Deger==1){
		goto Genel;
	}elseif($Deger==2){
		goto Yönetim;
	}elseif($Deger==3){
		goto Egitimci;
	}else{
		goto Diger;
	}
	
	Genel:
	
	echo "Onur Tatlı<br />";
	
	Yönetim:
	
	echo "Ümit Okudan<br />";
	
	echo "Serkan Çelik<br />";
	
	Egitimci:
	
	echo "Hakan Alakent<br />";
	
	echo "Volkan Alakent<br />";
	
	if(($Deger!=1) and ($Deger!=2) and ($Deger!=3)){
		Diger:

		echo "Kişi Yok.";
	}
	?>
</body>
</html>