<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<form action="Sonuc.php" method="post">
		Adınız Soyadınız : <input type="text" name="AdSoyad"><br />
		E-Mail Adresiniz : <input type="email" name="EmailAdresi"><br />
		Telefonunuz : <input type="text" name="Telefon"><br />
		Cinsiyetiniz : <input type="radio" name="Cinsiyet" value="Erkek"> Erkek <input type="radio" name="Cinsiyet" value="Kadın"> Kadın<br />
		Yaşınız : <select name="Yas">
			<option value=""></option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
		</select><br />
		<input type="submit" value="Gönder">
	</form>
</body>
</html>