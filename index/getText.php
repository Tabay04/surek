<?php
include "connect.php";
$id_logic=$_GET['id_logic'];


$sql="SELECT * FROM text_data WHERE id_kostum=$id_logic ORDER BY id_text ASC";
$query=pg_query($sql);

$string_builder="";
while($row=pg_fetch_assoc($query))
{
  $string_builder=$string_builder.$row['text']."-";
}

echo $string_builder;

?>