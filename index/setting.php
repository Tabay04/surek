<!DOCTYPE html>
<html>
<head>
	<title>Setting</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

	<div>
		<input type="number" name="no_surat" id="no_surat">
		<button onclick="save()">Input</button>
	</div>

	<script>
		
		function save()
		{
			var no_surat=document.getElementById("no_surat").value;
			if(no_surat!="")
			{
				
					 $.ajax({url: "../controller/saveNomor.php?nomor="+no_surat, success: function(result){
                    alert(result);
                }});
				

               
			}
		}

	</script>

</body>
</html>