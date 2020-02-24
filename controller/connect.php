<?php

// koneksi jesi

// $username='postgres';
// $password='12345';
// $url='localhost';
// $port=5432;
// $dbname='suratmenyuratRD';

// $conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

// koneksi RD


// $username='postgres';
// $password='toor';
// $url='localhost';
// $port=5432;
// $dbname='penduduk_test';

// $conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

// koneksi RD
$username='postgres';
$password='12345';
$url='localhost';
$port=5432;
$dbname='suratmenyuratRD';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");



//Koneksi Tabay
// $username='postgres';
// $password='12345';
// $url='localhost';
// $port=5432;
// $dbname='suratmenyuratRD';

// $conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

?>