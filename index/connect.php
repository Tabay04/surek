<?php

$username='postgres';
$password='12345';
$url='localhost';
$port=5432;
$dbname='suratmenyuratRD';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");
?>