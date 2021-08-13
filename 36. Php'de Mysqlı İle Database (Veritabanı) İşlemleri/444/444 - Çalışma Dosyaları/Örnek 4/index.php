<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<form action="sonuc.php" method="post">
		Adınız Soyadınız : <input type="text" name="adisoyadi"><br />
		E-Mail Adresiniz : <input type="email" name="email"><br />
		Şifreniz : <input type="password" name="sifre"><br />
		Telefonunuz : <input type="text" name="telefon"><br />
		Yaşınız : <select name="yas">
			<option value="">Lütfen Seçiniz</option>
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
		Cinsiyetiniz : <input type="radio" name="cinsiyet" value="Erkek">Erkek <input type="radio" name="cinsiyet" value="Kadın">Kadın<br />
		Yaşadığınız Şehir : <input type="text" name="sehir"><br />	
		<input type="submit" value="Kaydet">
	</form>
	<br /><br /><br />
	<?php
	/*
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
				if($KayitSayisi>0){
					while($Kayitlar=$Sorgu->fetch_object()){
						echo $Kayitlar->id . " | " . $Kayitlar->adisoyadi . " | " . $Kayitlar->emailadresi . " | " . $Kayitlar->sifre . " | " . $Kayitlar->telefon . " | " . $Kayitlar->yas . " | " . $Kayitlar->cinsiyet . " | " . $Kayitlar->sehir . " | " . $Kayitlar->kayittarihi . "<br /><br />"; 
					}
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>