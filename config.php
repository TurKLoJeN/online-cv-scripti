<?php 



session_start();

ob_start();

$user = "kullanici_adi";

$pass = "sifre";



// PDO VERİTABANI BAĞLANTISI



try{

	$db = new PDO("mysql:host=localhost; dbname=veritabani_adi; charset=utf8;",$user,$pass);



}catch(PDOexception $error){

	echo "Database Bağlantısı Kurulamadı!"; $error->getMessage();

}











 ?>
