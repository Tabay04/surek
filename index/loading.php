
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login SISUM</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../assets/img/surat.png">
  <link rel="stylesheet" type="text/css" href="../css/loading.css">
  <!-- <script src="jquery-2.1.4.js"></script> -->
<!--===============================================================================================-->
<style>
  #baputa{
    width: 50px;
    height: 50px;
    border: solid 5px #ccc;
    border-top-color: #ff6a00 ;
    border-radius: 100%;

    position: fixed;
    left:0; 
    top:0;
    right:0;
    bottom:0;
    margin: auto;

    animation: putar 2s linear infinite;
  }

  @keyframes putar{
    from{transform: rotate(0deg)}
    to{transform: rotate(360deg)} 
  }
</style>
</head>
<body>
  <div id="baputa"></div>

<div class="content">	
	<img src="https://picsum.photos/300/300/?random">
</div>

  <div class="loadingwrapper">
  	<span class="loader"><span class="loader-inner"></span></span>
  </div>

  

  <div id="containerdot">
    <div class="dot dot1"></div>
    <div class="dot dot2"></div>
    <div class="dot dot3"></div>
  </div>

	

</body>

<!-- <script >
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>
 -->
<script>
  var baputa = document.getElementById('baputa');
  window.addEventListener('load', function(){
      baputa.style.display="none";
  });
</script>
<script>
  var containerdot = document.getElementById('containerdot');
  window.addEventListener('load', function(){
      containerdot.style.display="none";
  });
</script>
</html>

