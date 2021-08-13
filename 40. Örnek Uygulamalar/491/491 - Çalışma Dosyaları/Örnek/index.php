<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	echo $Hata->getMessage();
	die();
}
?>
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
	$ReklamSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM bannerlar ORDER BY gosterimsayisi ASC LIMIT 1");
	$ReklamSorgusu->execute();
	$ReklamSayisi		=	$ReklamSorgusu->rowCount();
	$ReklamKaydi		=	$ReklamSorgusu->fetch(PDO::FETCH_ASSOC);
	?>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="150">
			<td align="center"><img src="dosyalar/<?php echo $ReklamKaydi["bannerdosyasi"]; ?>" border="0"></td>
		</tr>
	</table>
</body>
</html>
<?php
$ReklamGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE bannerlar SET gosterimsayisi=gosterimsayisi+1 WHERE id = ? LIMIT 1");
$ReklamGuncelle->execute([$ReklamKaydi["id"]]);

$VeritabaniBaglantisi	=	null;
?>