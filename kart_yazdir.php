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

$yazilacak_id = $_GET['id'];

$sor = mysql_query("select ad,soyad from kayit where id = $yazilacak_id ");
while ($listele = mysql_fetch_array($sor)) {
	$ad = $listele['ad'];
	$soyad = $listele['soyad'];

echo "<table border='1' width='350' height='200' >
	<tr>
		<td style='text-align: center'> LOGO </td>
	</tr>

	<tr>
		<td style='text-align: center'>  Adi: $ad </td>
	</tr>
	<tr>
		<td style='text-align: center' > Soyadi: $soyad </td>
	</tr>
</table>";
}
?>

</body>
</head>
</html>


