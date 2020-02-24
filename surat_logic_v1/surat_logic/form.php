<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Form Logic</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="logic_add.js"></script>
</head>
<body>
 <div id="container_logic">
     <div id="pilihan">
         <select id="data" class="data form form-control">
             <option value="">
                 --Pilih Kriteria--
             </option>
             <option value="header">
                 Header
             </option>
             <option value="title">
                 Title
             </option>
             <option value="body">
                 Body
             </option>
             <option value="body_option">
                 Body Option
             </option>
             <option value="left_sign">
                 Left Sign
             </option>
             <option value="center_sign">
                 Center Sign
             </option>
             <option value="right_sign">
                 Right Sign
             </option>
         </select>

     </div>
 </div>
<a href="#" onclick="addPilihan()">Add</a>/<a onclick="removePilihan()" href="#">Remove</a>
 <br>
<button class="btn btn-info" onclick="stringBuilder()">Submit</button>
</body>
</html>