<?php
$dbhost  = "localhost";
$dbkullanici = "root";  

$dbsifre  = "12345";

$dbadi = "test"; 

$baglan = mysql_connect($dbhost,$dbkullanici,$dbsifre);

if(!$baglan)
{ ('MYSQL Bağlanamıyor..!!');}  
else
{ ('MYSQL bağlantısı kuruldu...'); }

mysql_select_db($dbadi,$baglan) or die ("veri tabanına bağlanamıyor");

?>
