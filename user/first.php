<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
$cookie_user = $_COOKIE['cookie_user'];
?>


<home>
<head>
<title>FORJAR</title>
<body>
<body background='gambar/back.jpg'>
<center>
<table border=2 bordercolor='green' width=90%>
<tr><td colspan=3><img src="gambar/tabfor.png" width=100%>
</img>
</td>
</tr>
<tr><td colspan=3><?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y",  $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<b>, Selamat Pagi !!</b>";
}
else if(($a>11) && ($a<=15))
{
echo ", Selamat Siang !!";}
else if (($a>15) && ($a<=18)){
echo ", Selamat Sore !!";}
else { echo ", <b> Selamat Malam </b>";}
?>
</tr>

<td bgcolor='#FFFF66' width=45%>