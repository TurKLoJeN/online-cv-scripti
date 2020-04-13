<?php include '../config.php';

if (!$_SESSION["admin_kadi"]) {
	header("Location: login.php");
}

//GİRİŞ İŞLEMİ

if (isset($_POST["login"])) {
	$admin_kadi = htmlspecialchars(trim($_POST["admin_kadi"]));
	$admin_sifre = htmlspecialchars(trim(md5($_POST["admin_sifre"])));

if (!$admin_kadi || !$admin_sifre) {
	header("Location: login.php?giris=bos");
}else{

	$query = $db->prepare("SELECT * FROM admin WHERE admin_kadi=? AND admin_sifre=?");
	$query->execute(array($admin_kadi,$admin_sifre));
	$admin_giris = $query->fetch(PDO::FETCH_ASSOC);

	if ($admin_giris) {
		$_SESSION["login"] = true;
		$_SESSION["admin_kadi"] = $admin_giris["admin_kadi"];
		$_SESSION["admin_id"] = $admin_giris["admin_id"];

		header("Location: index.php");
	}else{
		header("Location: login.php?giris=no");
	}

}


}

// ADMİN KULLANICI ADI DEĞİŞTİRMEK

if (isset($_POST["kullanici-adi"])) {
	$admin_id = $_GET["admin_id"];

	$admin_kadi = $_POST["admin_kadi"];

	if(!$admin_kadi){
		header("Location: profil.php?admin-guncelle=bos");
	}else{
		$query = $db->prepare("UPDATE admin SET admin_kadi=? WHERE admin_id=?");
		$update = $query->execute(array($admin_kadi,$admin_id));

		if ($update) {
			header("Location: profil.php?admin-guncelle=yes");
		}else{
			header("Location: profil.php?admin-guncelle=no");
		}
	}
}

// ŞİFRE DEĞİŞTİRME İŞLEMİ


if (isset($_POST["sifre-degistir"])) {

	$admin_id = $_GET["admin_id"];

	$eski_sifre = md5($_POST["eski_sifre"]);
	$yeni_sifre = md5($_POST["yeni_sifre"]);

	if(!$eski_sifre || !$yeni_sifre){
		header("Location: profil.php?sifre-degistir=bos");
	}else{

		$query = $db->prepare("SELECT * FROM admin WHERE admin_sifre=?");
		$query->execute(array($eski_sifre));
		$query->fetch(PDO::FETCH_ASSOC);
		$say = $query->rowCount();

		if ($say==0) {
			header("Location: profil.php?sifre-degistir=eskisifrehatali");
		}else{
			$query = $db->prepare("UPDATE admin SET admin_sifre=?");
			$update = $query->execute(array($yeni_sifre));

			if ($update) {
				header("Location: profil.php?sifre-degistir=yes");
			}else{
				header("Location: profil.php?sifre-degistir=no");
			}


		}


	}

}


// GENEL AYARLAR GÜNCELLEME

if (isset($_POST["genel-ayarlar"])) {
	
	$site_id = $_GET["site_id"];

	$site_title 	= $_POST["site_title"];
	$site_url 		= $_POST["site_url"];
	$site_desc 		= $_POST["site_desc"];
	$site_keyw 		= $_POST["site_keyw"];
	$site_footer 	= $_POST["site_footer"];
	$site_admin 	= $_POST["site_admin"];
	$site_admin_url = $_POST["site_admin_url"];
	$site_muzik 	= $_POST["site_muzik"];
	$site_renk 		= $_POST["site_renk"];



		if (!$site_title || !$site_url || !$site_desc || !$site_keyw || !$site_footer || !$site_admin || !$site_admin_url) {
			header("Location: genel-ayarlar.php?ayar-guncelle=bos");
		}else{
			$query = $db->prepare("UPDATE ayarlar SET site_title=?, site_url=?, site_desc=?, site_keyw=?, site_footer=?, site_admin=?, site_admin_url=?, site_muzik=?, site_renk=? WHERE site_id=?");
			$update = $query->execute(array($site_title,$site_url,$site_desc,$site_keyw,$site_footer,$site_admin,$site_admin_url,$site_muzik,$site_renk,$site_id));

			if($update){
				header("Location: genel-ayarlar.php?ayar-guncelle=yes");
			}else{
				header("Location: genel-ayarlar.php?ayar-guncelle=no");
			}


		}
}

// Bilgilerim Güncelleme

if (isset($_POST["bilgilerim"])) {
	
	$bilgi_id 			= $_GET["bilgi_id"];

	$bilgi_fotograf 	= $_POST["bilgi_fotograf"];
	$bilgi_isim			= $_POST["bilgi_isim"];
	$bilgi_meslek 		= $_POST["bilgi_meslek"];
	$bilgi_ikamet 		= $_POST["bilgi_ikamet"];
	$bilgi_mail 		= $_POST["bilgi_mail"];
	$bilgi_telefon		= $_POST["bilgi_telefon"];
	$bilgi_skype 		= $_POST["bilgi_skype"];

	if (!$bilgi_fotograf || !$bilgi_isim || !$bilgi_meslek || !$bilgi_ikamet || !$bilgi_mail || !$bilgi_telefon || !$bilgi_skype) {
		header("Location: bilgilerim.php?bilgi-guncelle=bos");
	}
	else{

		$query = $db->prepare("UPDATE bilgilerim SET bilgi_fotograf=?, bilgi_isim=?, bilgi_meslek=?, bilgi_ikamet=?, bilgi_mail=?, bilgi_telefon=?, bilgi_skype=? WHERE bilgi_id=?");
		$update = $query->execute(array($bilgi_fotograf,$bilgi_isim,$bilgi_meslek,$bilgi_ikamet,$bilgi_mail,$bilgi_telefon,$bilgi_skype,$bilgi_id));

		if ($update) {
			header("Location: bilgilerim.php?bilgi-guncelle=yes");
		}
		else{
			header("Location: bilgilerim.php?bilgi-guncelle=no");
		}

	}

}

// BECERİ EKLE

if (isset($_POST["beceri-ekle"])){
	$beceri_adi 			= $_POST["beceri_adi"];
	$beceri_yuzde			= $_POST["beceri_yuzde"];
	if (!$beceri_adi || !$beceri_yuzde) {
		header("Location: becerilerim.php?beceri-ekle=bos");
	}
	else{

		$query = $db->prepare("INSERT INTO becerilerim SET beceri_adi=?, beceri_yuzde=?");
		$insert = $query->execute(array($beceri_adi,$beceri_yuzde));

		if ($insert) {
			header("Location: becerilerim.php?beceri-ekle=yes");
		}
		else{
			header("Location: becerilerim.php?beceri-ekle=no");
		}


	}
}



// Beceri Güncelle

if (isset($_POST["beceri-duzenle"])) {
	
	$beceri_id 				= $_GET["beceri_id"];

	$beceri_adi 			= $_POST["beceri_adi"];
	$beceri_yuzde			= $_POST["beceri_yuzde"];


	if (!$beceri_adi || !$beceri_yuzde) {
		header("Location: becerilerim.php?beceri-guncelle=bos");
	}
	else{

		$query = $db->prepare("UPDATE becerilerim SET beceri_adi=?, beceri_yuzde=? WHERE beceri_id=?");
		$update = $query->execute(array($beceri_adi,$beceri_yuzde,$beceri_id));

		if ($update) {
			header("Location: becerilerim.php?beceri-guncelle=yes");
		}
		else{
			header("Location: becerilerim.php?beceri-guncelle=no");
		}

	}

}

// BECERİ SİL

$becerisil_id = @$_GET["becerisil_id"];
if (isset($becerisil_id)) {
	
	$query = $db->prepare("DELETE FROM becerilerim WHERE beceri_id=?");
	$delete = $query->execute(array($becerisil_id));
	if ($delete) {
		header("Location: becerilerim.php?beceri-sil=yes");
			}else{
				header("Location: becerilerim.php?beceri-sil=no");
			}

}

// DİL EKLE

if (isset($_POST["dil-ekle"])){

	$dil_adi 			= $_POST["dil_adi"];
	$dil_yuzde			= $_POST["dil_yuzde"];
	if (!$dil_adi || !$dil_yuzde) {
		header("Location: dillerim.php?dil-ekle=bos");
	}
	else{

		$query = $db->prepare("INSERT INTO dillerim SET dil_adi=?, dil_yuzde=?");
		$insert = $query->execute(array($dil_adi,$dil_yuzde));

		if ($insert) {
			header("Location: dillerim.php?dil-ekle=yes");
		}
		else{
			header("Location: dillerim.php?dil-ekle=no");
		}


	}
}

// DİL Güncelle

if (isset($_POST["dil-duzenle"])) {
	
	$dil_id 			= $_GET["dil_id"];

	$dil_adi 			= $_POST["dil_adi"];
	$dil_yuzde			= $_POST["dil_yuzde"];


	if (!$dil_adi || !$dil_yuzde) {
		header("Location: dillerim.php?dil-guncelle=bos");
	}
	else{

		$query = $db->prepare("UPDATE dillerim SET dil_adi=?, dil_yuzde=? WHERE dil_id=?");
		$update = $query->execute(array($dil_adi,$dil_yuzde,$dil_id));

		if ($update) {
			header("Location: dillerim.php?dil-guncelle=yes");
		}
		else{
			header("Location: dillerim.php?dil-guncelle=no");
		}

	}

}

// DİL SİL

$dilsil_id = @$_GET["dilsil_id"];
if (isset($dilsil_id)) {
	
	$query = $db->prepare("DELETE FROM dillerim WHERE dil_id=?");
	$delete = $query->execute(array($dilsil_id));
	if ($delete) {
		header("Location: dillerim.php?dil-sil=yes");
			}else{
				header("Location: dillerim.php?dil-sil=no");
			}

}


// İŞ EKLE

if (isset($_POST["is-ekle"])){

	$is_adi 			= $_POST["is_adi"];
	$is_link			= $_POST["is_link"];
	$is_devam 			= $_POST["is_devam"];
	$is_aciklama		= $_POST["is_aciklama"];
	$is_tarih			= $_POST["is_tarih"];



	if (!$is_adi || !$is_link || !$is_aciklama || !$is_tarih) {
		header("Location: islerim.php?is-ekle=bos");
	}
	else{

		$query = $db->prepare("INSERT INTO isler SET is_adi=?, is_link=?, is_devam=?, is_aciklama=?, is_tarih=?");
		$insert = $query->execute(array($is_adi,$is_link,$is_devam,$is_aciklama,$is_tarih));

		if ($insert) {
			header("Location: islerim.php?is-ekle=yes");
		}
		else{
			header("Location: islerim.php?is-ekle=no");
		}


	}
}


// İŞ GÜNCELLE


if (isset($_POST["is-duzenle"])) {
	
	$is_id 				= $_GET["is_id"];

	$is_adi 			= $_POST["is_adi"];
	$is_link			= $_POST["is_link"];
	$is_devam 			= $_POST["is_devam"];
	$is_aciklama		= $_POST["is_aciklama"];
	$is_tarih			= $_POST["is_tarih"];


	if (!$is_adi || !$is_link || !$is_aciklama || !$is_tarih) {
		header("Location: islerim.php?is-duzenle=bos");
	}
	else{

		$query = $db->prepare("UPDATE isler SET is_adi=?, is_link=?, is_devam=?, is_aciklama=?, is_tarih=? WHERE is_id=?");
		$update = $query->execute(array($is_adi,$is_link,$is_devam,$is_aciklama,$is_tarih,$is_id));

		if ($update) {
			header("Location: islerim.php?is-duzenle=yes");
		}
		else{
			header("Location: islerim.php?is-duzenle=no");
		}

	}

}

// İŞ SİL

$issil_id = @$_GET["issil_id"];
if (isset($issil_id)) {
	
	$query = $db->prepare("DELETE FROM isler WHERE is_id=?");
	$delete = $query->execute(array($issil_id));
	if ($delete) {
		header("Location: islerim.php?is-sil=yes");
			}else{
				header("Location: islerim.php?is-sil=no");
			}

}

// PROJE EKLE

if (isset($_POST["proje-ekle"])){

	$proje_adi 			= $_POST["proje_adi"];
	$proje_link			= $_POST["proje_link"];
	$proje_aciklama		= $_POST["proje_aciklama"];
	$proje_tarih		= $_POST["proje_tarih"];



	if (!$proje_adi || !$proje_link || !$proje_aciklama || !$proje_tarih) {
		header("Location: projelerim.php?proje-ekle=bos");
	}
	else{

		$query = $db->prepare("INSERT INTO projeler SET proje_adi=?, proje_link=?, proje_aciklama=?, proje_tarih=?");
		$insert = $query->execute(array($proje_adi,$proje_link,$proje_aciklama,$proje_tarih));

		if ($insert) {
			header("Location: projelerim.php?proje-ekle=yes");
		}
		else{
			header("Location: projelerim.php?proje-ekle=no");
		}


	}
}

// PROJE GÜNCELLE


if (isset($_POST["proje-duzenle"])) {
	
	$proje_id 			= $_GET["proje_id"];

	$proje_adi 			= $_POST["proje_adi"];
	$proje_link			= $_POST["proje_link"];
	$proje_aciklama		= $_POST["proje_aciklama"];
	$proje_tarih		= $_POST["proje_tarih"];


	if (!$proje_adi || !$proje_link || !$proje_aciklama || !$proje_tarih) {
		header("Location: projelerim.php?proje-duzenle=bos");
	}
	else{

		$query = $db->prepare("UPDATE projeler SET proje_adi=?, proje_link=?, proje_aciklama=?, proje_tarih=? WHERE proje_id=?");
		$update = $query->execute(array($proje_adi,$proje_link,$proje_aciklama,$proje_tarih,$proje_id));

		if ($update) {
			header("Location: projelerim.php?proje-duzenle=yes");
		}
		else{
			header("Location: projelerim.php?proje-duzenle=no");
		}

	}

}

// PROJE SİL

$projesil_id = @$_GET["projesil_id"];
if (isset($projesil_id)) {
	
	$query = $db->prepare("DELETE FROM projeler WHERE proje_id=?");
	$delete = $query->execute(array($projesil_id));
	if ($delete) {
		header("Location: projelerim.php?proje-sil=yes");
			}else{
				header("Location: projelerim.php?proje-sil=no");
			}

}

// OKUL EKLE

if (isset($_POST["okul-ekle"])){

	$okul_adi 			= $_POST["okul_adi"];
	$okul_aciklama 		= $_POST["okul_aciklama"];
	$okul_tarih			= $_POST["okul_tarih"];
	$okul_devam			= $_POST["okul_devam"];



	if (!$okul_adi || !$okul_aciklama || !$okul_tarih) {
		header("Location: okullarim.php?okul-ekle=bos");
	}
	else{

		$query = $db->prepare("INSERT INTO okullar SET okul_adi=?, okul_aciklama=?, okul_tarih=?, okul_devam=?");
		$insert = $query->execute(array($okul_adi,$okul_aciklama,$okul_tarih,$okul_devam));

		if ($insert) {
			header("Location: okullarim.php?okul-ekle=yes");
		}
		else{
			header("Location: okullarim.php?okul-ekle=no");
		}


	}
}

// İŞ GÜNCELLE


if (isset($_POST["okul-duzenle"])) {
	
	$okul_id 			= $_GET["okul_id"];

	$okul_adi 			= $_POST["okul_adi"];
	$okul_aciklama 		= $_POST["okul_aciklama"];
	$okul_tarih			= $_POST["okul_tarih"];
	$okul_devam			= $_POST["okul_devam"];


	if (!$okul_adi || !$okul_aciklama || !$okul_tarih) {
		header("Location: okullarim.php?okul-duzenle=bos");
	}
	else{

		$query = $db->prepare("UPDATE okullar SET okul_adi=?, okul_aciklama=?, okul_tarih=?, okul_devam=? WHERE okul_id=?");
		$update = $query->execute(array($okul_adi,$okul_aciklama,$okul_tarih,$okul_devam,$okul_id));

		if ($update) {
			header("Location: okullarim.php?okul-duzenle=yes");
		}
		else{
			header("Location: okullarim.php?okul-duzenle=no");
		}

	}

}


// İŞ SİL

$okulsil_id = @$_GET["okulsil_id"];
if (isset($okulsil_id)) {
	
	$query = $db->prepare("DELETE FROM okullar WHERE okul_id=?");
	$delete = $query->execute(array($okulsil_id));
	if ($delete) {
		header("Location: okullarim.php?okul-sil=yes");
			}else{
				header("Location: okullarim.php?okul-sil=no");
			}

}

// SOSYAL MEDYA GÜNCELLEME

if (isset($_POST["sosyal-medya"])) {
	
	$sm_id = $_GET["sm_id"];

	$sm_facebook 		= $_POST["sm_facebook"];
	$sm_instagram 		= $_POST["sm_instagram"];
	$sm_twitter 		= $_POST["sm_twitter"];
	$sm_youtube 		= $_POST["sm_youtube"];
	$sm_google 			= $_POST["sm_google"];
	$sm_pinterest 		= $_POST["sm_pinterest"];
	$sm_linkedin 		= $_POST["sm_linkedin"];
	$sm_snapchat 		= $_POST["sm_snapchat"];
	$sm_github 			= $_POST["sm_github"];


			$query = $db->prepare("UPDATE sosyalmedya SET sm_facebook=?, sm_instagram=?, sm_twitter=?, sm_youtube=?, sm_google=?, sm_pinterest=?, sm_linkedin=?, sm_snapchat=?, sm_github=? WHERE sm_id=?");
			$update = $query->execute(array($sm_facebook,$sm_instagram,$sm_twitter,$sm_youtube,$sm_google,$sm_pinterest,$sm_linkedin,$sm_snapchat,$sm_github,$sm_id));

			if($update){
				header("Location: sosyal-medya.php?sm-guncelle=yes");
			}else{
				header("Location: sosyal-medya.php?sm-guncelle=no");
			}


		}



 ?>