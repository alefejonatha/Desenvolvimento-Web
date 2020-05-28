<?php

$id = $_GET['id'];
$sql = "SELECT * FROM artigo WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<H1>Editar</H1>

<form id="contactForm" action="?pg=editarBanco" method="post">
    <label>Titulo do Card: </label>
        <input name="tituloCard" type="text" value="<?=$dados['tituloCard'];?>">
        
    <label>Texto do Card: </label>
        <textarea name="textoCard" value="<?=$dados['textoCard'];?>"><?=$dados['textoCard'];?></textarea>

    <label>Foto do Card: </label>
       <textarea name="linkFotoCard" value="<?=$dados['linkFotoCard'];?>"><?=$dados['linkFotoCard'];?></textarea>

    <label>Titulo do Artigo: </label>
       <input name="tituloArt" type="text" value="<?=$dados['tituloArt'];?>">

    <label>Texto do Artigo: </label>
        <textarea name="textoArt" value="<?=$dados['textoArt'];?>"><?=$dados['textoArt'];?></textarea>
    <label>Link do video: </label>
        <textarea name="linkVideoArt" value="<?=$dados['linkVideoArt'];?>"><?=$dados['linkVideoArt'];?></textarea>

    <hr>
    <button class="btn btn-primary" name="Enviar">Cadastrar</button>
</form>

