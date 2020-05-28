<?php include "conecta.inc.php"; ?>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiMusic.com</title>

    
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/principal.css">
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
    crossorigin="anonymous"></script>
    
</head>
<body>
    
<div class="d-flex flex-row p-3 bg-dark text-white ">
        <div class="col-2 p-2 bg-dark text-white" >
            <?php include_once('sidebar.php'); ?> 
        </div>           
              
    
    
    <div class="col-9 p-2 bg-dark text-white">
	    <?php
	    # área de conteúdo
	    if(empty($_SERVER["QUERY_STRING"])){
	            $var = "listar.php";
	            include_once("$var");
	    }else{
	            $pg = $_GET['pg'];
	            include_once("$pg.php");
	    }
	    ?>
	</div>
</div>    
        
<footer>
        <div class="p-3 bg-dark text-white">
            <?php include_once('../rodape.php'); ?>
        </div>  
</footer>  
    
</body>
</html>