<?php
include("baglanti.php");


$ad= $_POST["ad"];
$soyad= $_POST["soyad"];
$cinsiyet= $_POST["cinsiyet"];
$d_tarihi= $_POST["d_tarih"];
$email= $_POST["email"];
$tel= $_POST["tel"];
$adres= $_POST["adres"];
$sehir= $_POST["sehir"];
$ulke= $_POST["ulke"];
$posta_kodu= $_POST["posta_kodu"];
$meslek= $_POST["meslek"];
$universite= $_POST["universite"];
$fakulte= $_POST["fakulte"];
$bolum= $_POST["bolum"];
$akademik_unvan = $_POST["akademik_unvan"];
$konaklama_istegi= $_POST["konaklama_istegi"];

if ($ad=="" || $soyad== "" || $cinsiyet== "" || $d_tarihi== "" || $email== "" || $tel== "" || $adres== "" || $sehir== "" || $ulke== "" || $posta_kodu== "" || $meslek== "" || $universite== "" || $fakulte== "" || $bolum== "" || $akademik_unvan== "" || $konaklama_istegi== "")
{
	echo "lutfen bos alan birakmayiniz.";
}
else {
$sql = "INSERT INTO kayit (ad,soyad,cinsiyet,d_tarihi,email,tel,adres,sehir,ulke,posta_kodu,meslek,universite,fakulte,bolum,akademik_unvan,konaklama_istegi) VALUES ('$ad','$soyad','$cinsiyet','$d_tarihi','$email','$tel','$adres','$sehir','$ulke','$posta_kodu','$meslek','$universite','$fakulte','$bolum','$akademik_unvan','$konaklama_istegi')" or die ("kayıt yapılamadı");

$kayit = mysql_query($sql);
}
?>


