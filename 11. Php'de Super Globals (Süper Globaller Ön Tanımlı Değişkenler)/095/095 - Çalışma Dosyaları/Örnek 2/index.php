<?php
session_start();
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
	/*
	$_SESSION	:	Herhangi bir kullanıcı için session (oturum) tanımlama imkanı tanır. Ayrıca daha önceden tanımlanmış olan session (oturum) verilerine de ulaşılabilme imkanı tanır.
	*/
	
	echo "Extra Adıyla Tanımlı SESSION Değeriniz : " . $_SESSION["Extra"] . "<br />";
	echo "Email Adıyla Tanımlı SESSION Değeriniz : " . $_SESSION["Email"] . "<br />";
	
	?>
</body>
</html>