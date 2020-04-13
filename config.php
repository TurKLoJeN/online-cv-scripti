<?php 

session_start();
ob_start();
$user = "turkloje_cv";
$pass = ".(?LIQ^Q=pzf";

// PDO VERİTABANI BAĞLANTISI

try{
	$db = new PDO("mysql:host=localhost; dbname=turkloje_cv; charset=utf8;",$user,$pass);

}catch(PDOexception $error){
	echo "Database Bağlantısı Kurulamadı!"; $error->getMessage();
}





 ?>