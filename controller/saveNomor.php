<?php

include "connect.php";
$data=$_GET['nomor'];

$selectMax="SELECT MAX(id) FROM setting";
$result=pg_query($selectMax);

$max_num=0;
$max_nosurat=0;

if($result)
{
	while($row=pg_fetch_assoc($result))
	{
		$max_num=$row['max'];
	}
}

$max_num=$max_num+1;

if($max_num==1)
{
	$queryInsert="INSERT INTO public.setting(
            id, no_surat)
    VALUES ($max_num, $data);";
    $result=pg_query($queryInsert);

    if($result)
    {
    	echo "Input Berhasil ";
    }

}
else
{
  $selectMaxNo="SELECT no_surat FROM setting WHERE id=1";
  $result=pg_query($selectMaxNo);
  if($result)
  {
  	while($row=pg_fetch_assoc($result))
  	{
  		$max_nosurat=$row['no_surat'];
  	}

  	if($max_nosurat>$data)
  	{
  		echo "No Surat Terlalu kecil ";
  	}
  	else
  	{
  		// Update Data
  		$updateMaxNo="UPDATE public.setting SET no_surat=$data WHERE id=1;";
  		$result=pg_query($updateMaxNo);
  		if($result)
  		{
  			echo "Update Sukses ";
  		}
  		else
  		{
  			echo "Update Gagal ";
  		}
  	}
  }
}

echo $data;

?>