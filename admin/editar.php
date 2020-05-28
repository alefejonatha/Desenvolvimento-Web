<?php

$id = $_GET['id'];
$sql = "SELECT * FROM artigo WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form class="col-lg"  action="?pg=editarBanco" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>">
            <label>Titulo do Card: </label>
                <input class="col-lg" name="tituloPost" type="text" value="<?=$dados['tituloPost'];?>">

            <label>Texto do Card: </label>
            <textarea class="col-lg" name="textoPost" value="<?=$dados['textoPost'];?>"><?=$dados['textoPost'];?></textarea>

            <label>Foto do Card: </label>
               <textarea class="col-lg" name="linkPost" value="<?=$dados['linkPost'];?>"><?=$dados['linkPost'];?></textarea>

            <label>Titulo do Artigo: </label>
               <input class="col-lg" name="tituloArt" type="text" value="<?=$dados['tituloArt'];?>">

            <label>Texto do Artigo: </label>
                <textarea class="col-lg" name="textoArt" value="<?=$dados['textoArt'];?>"><?=$dados['textoArt'];?></textarea>
            <label>Link do video: </label>
                <textarea class="col-lg" name="linkArt" value="<?=$dados['linkArt'];?>"><?=$dados['linkArt'];?></textarea>   
                <hr>
            <button class="btn btn-info col-2" name="Enviar">Atualizar</button>
    
</form>

<?php } ?>