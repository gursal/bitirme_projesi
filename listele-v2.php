<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Listele</title>
        <script language="JavaScript">
        function popUp(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "',       'width=400,height=300,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0');");
        }
        </script>

	<script language="JavaScript">
        function popUp_liste(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "',       'width=1000,height=800,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0');");
        }
        </script>

</head>
<body>




<?php
include("baglanti.php");

echo "<input type=button value='Listeyi Yazdir' onClick=\"javascript:popUp_liste('liste_yazdir.php')\">"; 

	$sayfada = 10; // sayfada gösterilecek içerik miktarını belirtiyoruz.

$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM kayit');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];

$toplam_sayfa = ceil($toplam_icerik / $sayfada);
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

if($sayfa < 1) $sayfa = 1;
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

$limit = ($sayfa - 1) * $sayfada;
?>

	<table width=\"100%\">
	<tr>
	<td>Üye ID</td>
	<td>Kullanıcı Adı</td>
	<td>Soyadı</td>
	<td>E-Posta</td>
	<td>Sil</td>
	<td>Kart Yazdir</td>
</tr>
<?php


$sorgu = mysql_query('SELECT * FROM kayit LIMIT ' . $limit . ', ' . $sayfada);
 while($listele = mysql_fetch_assoc($sorgu)) {
	$id = $listele['id'];
	$ad = $listele['ad'];
	$soyad = $listele['soyad'];
	$email = $listele['email']; 
	$sil= "Sil";
	$k_yazdir= "Kart Yazdir";
	echo "
		<tr>
		<td>$id</td>
		<td>$ad</td>
		<td>$soyad</td>
		<td>$email</td>  
		<td>  <a href='sil.php?id=$id' onclick=\"return confirm('Emin misiniz');\"> $sil </a> </td>
		<td> <input type=button value='Kart Yazdir' onClick=\"javascript:popUp('kart_yazdir.php?id=$id')\"> </td>
		</tr>";

 }
?>
	</table>

<?php
	  for($s = 1; $s <= $toplam_sayfa; $s++) {
	     if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
	           echo $s . ' ';
	              } else {
	                    echo '<a href="?sayfa=' . $s . '">' . $s . '</a> 
	                    ';
	                       }
	                       }

?>
</body>
</html>	
