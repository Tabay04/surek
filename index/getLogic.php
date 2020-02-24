<?php
include "connect.php";
$id=$_GET['id'];
$query="SELECT id_kostum, logic, header_name FROM public.custom WHERE id_kostum=$id";
$result=pg_query($query);

while($row=pg_fetch_assoc($result))
{
 $logic=$row['logic'];
 $header=$row['header_name'];
}

echo $logic."|".$header;



?>