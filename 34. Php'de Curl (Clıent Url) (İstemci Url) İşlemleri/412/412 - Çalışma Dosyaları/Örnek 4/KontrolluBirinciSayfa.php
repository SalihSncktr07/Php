<?php
session_start();

if(isset($_SESSION["Kullanici"])){
	echo "Kullanıcı Girişi Yapılmış 1. Sayfa<br />";
}else{
	header("Location: index.php");
	exit();
}
?>