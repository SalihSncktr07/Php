<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
<style>
	.InputAlani{
		width: 100%;
		height: 15px;
		margin: 0;
		padding: 5px 10px 5px 10px;
	}
	.TextareaAlani{
		width: 100%;
		height: 150px;
		margin: 0;
		padding: 5px 10px 5px 10px;
	}
	.GonderButonu{
		height: 30px;
		margin: 0;
		padding: 5px 50px 5px 50px;
		border: 1px solid #00FF00;
		background: #009900;
		color: #FFFFFF;
	}
	.GonderButonu:hover{
		border: 1px solid #000000;
		background: #00FF00;
		color: #000000;
		cursor: pointer;
	}
</style>
</head>

<body>
	<form action="sonuc.php" method="post">
		<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="150" height="30">Adınız Soyadınız</td>
				<td width="20" height="30">:</td>
				<td width="330" height="30"><input type="text" class="InputAlani" name="adisoyadi"></td>
			</tr>
			<tr>
				<td width="150" height="30">Telefon Numaranız</td>
				<td width="20" height="30">:</td>
				<td width="330" height="30"><input type="text" class="InputAlani" name="telefon"></td>
			</tr>
			<tr>
				<td width="150" height="30">E-Mail Adresiniz</td>
				<td width="20" height="30">:</td>
				<td width="330" height="30"><input type="email" class="InputAlani" name="emailadresi"></td>
			</tr>
			<tr>
				<td width="150" height="30">Konu</td>
				<td width="20" height="30">:</td>
				<td width="330" height="30"><input type="text" class="InputAlani" name="konusu"></td>
			</tr>
			<tr>
				<td width="150" height="30" valign="top">Mesaj</td>
				<td width="20" height="30" valign="top">:</td>
				<td width="330" height="30"><textarea class="TextareaAlani" name="mesaji"></textarea></td>
			</tr>
			<tr>
			  <td width="150" height="30">&nbsp;</td>
			  <td width="20" height="30">&nbsp;</td>
				<td width="330" height="30" align="left"><input type="submit" class="GonderButonu" value="Gönder"></td>
			</tr>
		</table>
</form>
</body>
</html>