<?php

// koneksi jesi
// $username='postgres';
// $password='toor';
// $url='localhost';
// $port=5432;
// $dbname='penduduk_test';

// $conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

// koneksi RD
$username='postgres';
$password='root';
$url='localhost';
$port=5432;
$dbname='penduduk';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

?>