<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<form action="Sonuc.php" method="get">
		Adınız Soyadınız : <input type="text" name="Isim"><br />
		Hobileriniz	:<br />
		<input type="checkbox" name="Hobiler[]" value="Alışveriş"> Alışveriş<br />
		<input type="checkbox" name="Hobiler[]" value="Seyahat"> Seyahat<br />
		<input type="checkbox" name="Hobiler[]" value="Sinema"> Sinema<br />
		<input type="checkbox" name="Hobiler[]" value="Tiyatro"> Tiyatro<br />
		<input type="checkbox" name="Hobiler[]" value="Yemek"> Yemek<br />
		<input type="submit" value="Formu Gönder">
	</form>
</body>
</html>