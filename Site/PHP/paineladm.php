<?php
session_start();
include('verificarlogin.php');
?>
<!DOCTYPE html>
<html>
    <head>
	    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	    <link rel="manifest" href="/site.webmanifest">
	    <meta charset="utf-8">
	    <title>Healthy Food</title>
	    <link rel="stylesheet" type="text/css" href="../CSS/estilopainel.css">
    </head>

<body>

    <div id="topo">

	    <div id="logo">
        </div>


    </div>	

    <div id="centro">

        <div id="cright">
            <Label>Bem Vindo(a),<?php echo $_SESSION['nome'];?> !</Label>


        </div>


        <div id="cleft">

        </div>



    </div>

    <div id="final">
	 
	&#169; 2021 Helf Food

</div>


</body>
</html>





























<!-- <h2>Bem Vindo,  <?php // echo $_SESSION['nome']; ?> </h2>
<h2><a href="logout.php">Sair</a></h2>  -->
