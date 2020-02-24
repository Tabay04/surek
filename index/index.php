<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <h1>Pilih Surat</h1>
    <select name="pilihan" id="pilihan" onchange="pilihan()">
        <option value="">Pilih Surat</option>
            <?php
            include "connect.php";
            $ql="SELECT id_kostum FROM custom";
            $result=pg_query($ql);
            while($row=pg_fetch_assoc($result))
            {
                ?>
                <option value="<?php echo $row['id_kostum'] ?>"><?php echo $row['id_kostum'] ?></option>
            <?php

            }
            ?>
            ?>

        <select name="" id="">


    </body>

    <script>
        function pilihan() {
            let data= document.getElementById("pilihan").value;
            // alert(data);
            window.location="surat_generator.php?id="+data;
        }
    </script>
</html>