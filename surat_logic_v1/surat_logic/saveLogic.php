<?php
include "connect.php";
$logic=$_GET['logic'];
$text=$_GET['text'];

$data_text=explode("~",$text);
print_r($data_text);

$data_length=count($data_text);
echo $data_length;

$stringBuilder='';

$i=0;
while ($i<$data_length)
{
$stringBuilder=$stringBuilder.$i."_";
$i++;
}

echo $stringBuilder;

$selectMax="SELECT MAX(id_kostum) FROM public.custom;";
$resultMax=pg_query($selectMax);
$max=0;
while($row=pg_fetch_assoc($resultMax))
{
$max=$row['max'];
$max++;
}


echo $max;
$queryInsert="INSERT INTO public.custom(id_kostum, logic, header_name) VALUES ($max, '$logic', '$stringBuilder');";


$resultInsert=pg_query($queryInsert);

$j=0;
while ($j<$data_length)
{
$text_max=0;
 $max_text="SELECT MAX(id_text)
            	FROM public.text_data;";
 $result_max=pg_query($max_text);
 while($row=pg_fetch_assoc($result_max))
 {
  $text_max=$row['max'];
  $text_max++;
 }
 $query="INSERT INTO public.text_data(
         	id_text, id_kostum, text)
         	VALUES ($text_max,$max,'$data_text[$j]');";
 $result=pg_query($query);
$j++;
}
?>