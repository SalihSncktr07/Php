<?php
require_once("baglan.php");
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
	<table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ÜST ALAN (HEADER ALANI) (LOGO - BANNER - MENULER Vs.)</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td width="200" valign="top" height="400" bgcolor="#CCCCCC"><a href="index.php" style="text-decoration: none; color: black;">Ana Sayfa</a></td>
			<td width="10" height="400">&nbsp;</td>
			<td width="480" height="400" bgcolor="#CCCCCC">İÇERİK ALANI (MAIN ALANI)</td>
			<td width="10" height="400">&nbsp;</td>
			<td width="300" height="400" valign="top">
				<?php if(isset($_SESSION["Kullanici"])){ ?>
					<table width="300" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td  height="30" bgcolor="#990000" style="color:#FFFFFF;">&nbsp;Üyelik Alanı</td>
						</tr>
						<tr>
							<td height="30" align="left">Merhaba <?php echo $UyeninAdiSoyadi; ?></td>
						</tr>
						<tr>
							<td height="30" align="right"><a href="cikis.php" style="text-decoration: none; color: red;">Çıkış Yap</a></td>
						</tr>
					</table>
				<?php }else{ ?>
					<form action="uyegiris.php" method="post">
						<table width="300" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td colspan="3" height="30" bgcolor="#990000" style="color:#FFFFFF;">&nbsp;Üyelik Alanı</td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;Kullanıcı Adı</td>
								<td height="30" width="10">:</td>
								<td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 98%;"></td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;Şifre</td>
								<td height="30" width="10">:</td>
								<td height="30" width="190"><input type="password" name="sifre" style="width: 98%;"></td>
							</tr>
							<tr>
								<td height="30" width="100">&nbsp;</td>
								<td height="30" width="10">&nbsp;</td>
								<td height="30" width="190" align="right"><input type="submit" value="Giriş Yap"></td>
							</tr>
							<tr>
								<td colspan="3" height="30" align="right"><a href="uyeol.php" style="text-decoration: none; color: red;">Yeni Üye Ol</a></td>
							</tr>
						</table>
					</form>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ALT ALAN (FOOTER ALANI) (LOGO - BANNER - MENULER Vs.)</td>
		</tr>
	</table>
</body>
</html>
<?php
$VeritabaniBaglantisi	=	null;
?>