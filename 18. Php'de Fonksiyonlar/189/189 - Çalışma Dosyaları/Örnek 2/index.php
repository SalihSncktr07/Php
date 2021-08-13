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
	
	function Islem($MaksimumTaksitSiniri=0){
		
		echo "Kredi kartı ile tek çekimli sepet tutarı : 1.000 TL<br />";
		if($MaksimumTaksitSiniri==0){
			return;
		}
		echo "Kredi kartı ile 2 taksitli sepet tutarı : 1.010 TL<br />";
		if($MaksimumTaksitSiniri==2){
			return;
		}
		echo "Kredi kartı ile 3 taksitli sepet tutarı : 1.020 TL<br />";
		if($MaksimumTaksitSiniri==3){
			return;
		}
		echo "Kredi kartı ile 4 taksitli sepet tutarı : 1.030 TL<br />";
		if($MaksimumTaksitSiniri==4){
			return;
		}
		echo "Kredi kartı ile 5 taksitli sepet tutarı : 1.040 TL<br />";
		if($MaksimumTaksitSiniri==5){
			return;
		}
		echo "Kredi kartı ile 6 taksitli sepet tutarı : 1.050 TL<br />";
		if($MaksimumTaksitSiniri==6){
			return;
		}
		echo "Kredi kartı ile 7 taksitli sepet tutarı : 1.060 TL<br />";
		if($MaksimumTaksitSiniri==7){
			return;
		}
		echo "Kredi kartı ile 8 taksitli sepet tutarı : 1.070 TL<br />";
		if($MaksimumTaksitSiniri==8){
			return;
		}
		echo "Kredi kartı ile 9 taksitli sepet tutarı : 1.080 TL<br />";
		if($MaksimumTaksitSiniri==9){
			return;
		}
		echo "Kredi kartı ile 10 taksitli sepet tutarı : 1.090 TL<br />";
		if($MaksimumTaksitSiniri==10){
			return;
		}
		echo "Kredi kartı ile 11 taksitli sepet tutarı : 1.100 TL<br />";
		if($MaksimumTaksitSiniri==11){
			return;
		}
		echo "Kredi kartı ile 12 taksitli sepet tutarı : 1.110 TL";
		
	}
	
	Islem(6);
	
	?>
</body>
</html>