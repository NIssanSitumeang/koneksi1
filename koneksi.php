<?php
$host = "localhost";
$user = "root";
$pass="";
$db = "perpustakaan";

$koneksi = mysql_connect($host,$user,$pass);
$selectdb = mysql_select_db ($db, $koneksi);
if (selectdb) {
echo "koneksi sukses";
} else {echo "koneksi gagal";
}
?>