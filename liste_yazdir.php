<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />

	<title>Kart_yazdir</title>
<SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
	document.write('<form><input type=button name=print value="Yazdir" onClick="window.print()"></form>');
}
</script>

<body>
<?php

include ("baglanti.php");

echo "
	<html>
	<head>
	<title>Veri Tabanındaki Bilgileri Listeleme</title>
	</head>
	<body><table width=\"100%\">
	<tr>
	<td>Üye ID</td>
	<td>Kullanıcı Adı</td>
	<td>Soyadı</td>
	<td>E-Posta</td>
	<td>Sil</td>
	</tr>
	";

/* 
 * Tablomuzdaki sabit kalacak kısımları listeleme 
 * yapmadan önce echo komutu ile yazdırdım. şimdi listelemeye başlayabiliriz.
 * */

$sor = mysql_query("select * from kayit order by id");

while ($listele = mysql_fetch_array($sor)) {

	$id = $listele['id'];
	$ad = $listele['ad'];
	$soyad = $listele['soyad'];
	$email = $listele['email']; 
	$sil= "Sil";
	echo "
		<tr>
		<td>$id</td>
		<td>$ad</td>
		<td>$soyad</td>
		<td>$email</td>  
		<td>  <a href='sil.php?id=$id' onclick=\"return confirm('Emin misiniz');\"> Sil </a> </td>
		</tr>";

}


echo "
	</table>
	</body>
	</html>";

?>



</body>
</head>
</html>


