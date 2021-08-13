<?php
session_start();

if(isset($_SESSION["Kullanici"])){
	echo "Kullanıcı Girişi Yapılmış 2. Sayfa<br />";
}else{
	header("Location: index.php");
	exit();
}
?>