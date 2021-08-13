<?php
require_once("ayar.php");
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
	<form action="sonuc.php" method="post">
	Kullanıcı Adı :<br />
	<input type="text" name="KullanicininAdi"><br />
	Kullanıcı Şifresi :<br />
	<input type="password" name="KullanicininSifresi"><br />
	<input type="submit" value="Giriş Yap">
	</form>
</body>
</html>