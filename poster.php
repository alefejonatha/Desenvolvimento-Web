
<?php
    if (isset($_GET['dadosId']))
        $dadosId = $_GET['dadosId'];
    else
        $dadosId = null;

        
    $busca = "Select * from artigo Where id = $dadosId";
    $todos = mysqli_query($conexao, $busca);
    $dados = mysqli_fetch_array($todos);
?>
    
<div class="containerPost">

    <div class="imglink">
        <?=$dados['linkArt']?>
    </div>
    <hr>
    <div class="tituloArt">
        <h1><?=$dados['tituloArt']?></h1>
    </div>
    <br>
    <div class="textoArt">     
        <?=$dados['textoArt']?>
    </div>

</div>


</html>