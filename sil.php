<?php
include ('baglanti.php');

$silinecek_id = $_GET['id'];



$sil = mysql_query("delete from kayit where id='$silinecek_id'") or die("Hata oluştu kayıt silinemedi..");
if($sil)
{
	echo "$silinecek_id numaralı kayıt silinmiştir.";
}



echo "<meta http-equiv='refresh' content='0; url=listele-v2.php' />";

?>

