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
	UPDATE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri guncellemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_errno;
		die();
	}

	$GelenIDDegeri	=	$_GET["id"];
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE id=" . $GelenIDDegeri);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->num_rows;
				if($KayitSayisi>0){
					$Kayit	=	$Sorgu->fetch_assoc();
				}else{
					header("Location:index.php");
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
	
	<form action="sonuc.php?id=<?php echo $GelenIDDegeri; ?>" method="post">
		Ad Soyad : <input type="text" name="adisoyadi" value="<?php echo $Kayit["adisoyadi"]; ?>"><br />
		E-Mail Adresi : <input type="email" name="emailadresi" value="<?php echo $Kayit["emailadresi"]; ?>"><br />
		Şifre : <input type="password" name="sifre" value="<?php echo $Kayit["sifre"]; ?>"><br />
		Telefon : <input type="text" name="telefon" value="<?php echo $Kayit["telefon"]; ?>"><br />
		Yaş : <select name="yas">
			<option value="30" <?php if($Kayit["yas"] == 30){ ?>selected="selected"<?php } ?>>30</option>
			<option value="31" <?php if($Kayit["yas"] == 31){ ?>selected="selected"<?php } ?>>31</option>
			<option value="32" <?php if($Kayit["yas"] == 32){ ?>selected="selected"<?php } ?>>32</option>
			<option value="33" <?php if($Kayit["yas"] == 33){ ?>selected="selected"<?php } ?>>33</option>
			<option value="34" <?php if($Kayit["yas"] == 34){ ?>selected="selected"<?php } ?>>34</option>
			<option value="35" <?php if($Kayit["yas"] == 35){ ?>selected="selected"<?php } ?>>35</option>
			<option value="36" <?php if($Kayit["yas"] == 36){ ?>selected="selected"<?php } ?>>36</option>
			<option value="37" <?php if($Kayit["yas"] == 37){ ?>selected="selected"<?php } ?>>37</option>
			<option value="38" <?php if($Kayit["yas"] == 38){ ?>selected="selected"<?php } ?>>38</option>
			<option value="39" <?php if($Kayit["yas"] == 39){ ?>selected="selected"<?php } ?>>39</option>
			<option value="40" <?php if($Kayit["yas"] == 40){ ?>selected="selected"<?php } ?>>40</option>
			<option value="41" <?php if($Kayit["yas"] == 41){ ?>selected="selected"<?php } ?>>41</option>
			<option value="42" <?php if($Kayit["yas"] == 42){ ?>selected="selected"<?php } ?>>42</option>
			<option value="43" <?php if($Kayit["yas"] == 43){ ?>selected="selected"<?php } ?>>43</option>
			<option value="44" <?php if($Kayit["yas"] == 44){ ?>selected="selected"<?php } ?>>44</option>
			<option value="45" <?php if($Kayit["yas"] == 45){ ?>selected="selected"<?php } ?>>45</option>
			<option value="46" <?php if($Kayit["yas"] == 46){ ?>selected="selected"<?php } ?>>46</option>
			<option value="47" <?php if($Kayit["yas"] == 47){ ?>selected="selected"<?php } ?>>47</option>
			<option value="48" <?php if($Kayit["yas"] == 48){ ?>selected="selected"<?php } ?>>48</option>
			<option value="49" <?php if($Kayit["yas"] == 49){ ?>selected="selected"<?php } ?>>49</option>
			<option value="50" <?php if($Kayit["yas"] == 50){ ?>selected="selected"<?php } ?>>50</option>
		</select><br />
		Cinsiyet : <input type="radio" name="cinsiyet" value="Erkek" <?php if($Kayit["cinsiyet"] == "Erkek"){ ?>checked="checked"<?php } ?>>Erkek <input type="radio" name="cinsiyet" value="Kadın" <?php if($Kayit["cinsiyet"] == "Kadın"){ ?>checked="checked"<?php } ?>>Kadın<br />
		Şehir : <input type="text" name="sehir" value="<?php echo $Kayit["sehir"]; ?>"><br />
		<input type="submit" value="Güncelle">
	</form>
</body>
</html>