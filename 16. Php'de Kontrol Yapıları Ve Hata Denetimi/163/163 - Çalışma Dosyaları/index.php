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
	
	$Saat	=	23;
	
	switch($Saat){
		case ($Saat >= 0) and ($Saat <= 6):
			switch($Saat){
				case $Saat == 0:
					echo "İyi geceler, şuan saat 00:00";
				break;
				case $Saat == 1:
					echo "İyi geceler, şuan saat 01:00";
				break;
				case $Saat == 2:
					echo "İyi geceler, şuan saat 02:00";
				break;
				case $Saat == 3:
					echo "İyi geceler, şuan saat 03:00";
				break;
				case $Saat == 4:
					echo "İyi geceler, şuan saat 04:00";
				break;
				case $Saat == 5:
					echo "İyi geceler, şuan saat 05:00";
				break;
				case $Saat == 6:
					echo "İyi geceler, şuan saat 06:00";
				break;
				default:
					echo "Bilinmeyen bir hata oluştu.";
			}
		break;
		case ($Saat > 6) and ($Saat <= 9):
			switch($Saat){
				case $Saat == 7:
					echo "Günaydın, şuan saat 07:00";
				break;
				case $Saat == 8:
					echo "Günaydın, şuan saat 08:00";
				break;
				case $Saat == 9:
					echo "Günaydın, şuan saat 09:00";
				break;
				default:
					echo "Bilinmeyen bir hata oluştu.";
			}
		break;
		case ($Saat > 9) and ($Saat <= 17):
			switch($Saat){
				case $Saat == 10:
					echo "İyi günler, şuan saat 10:00";
				break;
				case $Saat == 11:
					echo "İyi günler, şuan saat 11:00";
				break;
				case $Saat == 12:
					echo "İyi günler, şuan saat 12:00";
				break;
				case $Saat == 13:
					echo "İyi günler, şuan saat 13:00";
				break;
				case $Saat == 14:
					echo "İyi günler, şuan saat 14:00";
				break;
				case $Saat == 15:
					echo "İyi günler, şuan saat 15:00";
				break;
				case $Saat == 16:
					echo "İyi günler, şuan saat 16:00";
				break;
				case $Saat == 17:
					echo "İyi günler, şuan saat 17:00";
				break;
				default:
					echo "Bilinmeyen bir hata oluştu.";
			}
		break;
		case ($Saat > 17) and ($Saat <= 23):
			switch($Saat){
				case $Saat == 18:
					echo "İyi akşamlar, şuan saat 18:00";
				break;
				case $Saat == 19:
					echo "İyi akşamlar, şuan saat 19:00";
				break;
				case $Saat == 20:
					echo "İyi akşamlar, şuan saat 20:00";
				break;
				case $Saat == 21:
					echo "İyi akşamlar, şuan saat 21:00";
				break;
				case $Saat == 22:
					echo "İyi akşamlar, şuan saat 22:00";
				break;
				case $Saat == 23:
					echo "İyi akşamlar, şuan saat 23:00";
				break;
				default:
					echo "Bilinmeyen bir hata oluştu.";
			}
		break;
		default:
			echo "Girilen değer ( {$Saat} ) bir saat dilimi değildir.";
	}
	
	?>
</body>
</html>