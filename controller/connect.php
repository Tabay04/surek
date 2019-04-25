<?php

$username='postgres';
$password='toor';
$url='localhost';
$port=5432;
$dbname='penduduk_test';

$conn = pg_connect("host=".$url." port=".$port." dbname=".$dbname." user=".$username." password=".$password) or die("Gagal");

?>