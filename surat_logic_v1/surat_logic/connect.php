<?php

$username='postgres';
$password='toor';
$url='localhost';
$port=5433;
$dbname='surat_logic';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");
?>