<?php

$tituloCard = $_POST['tituloCard'];
$textoCard = $_POST['textoCard'];
$linkFotoCard = $_POST['linkFotoCard'];
$tituloArt = $_POST['tituloArt'];
$textoArt = $_POST['textoArt'];
$linkVideoArt = $_POST['linkVideoArt'];


$sql2 = mysqli_query($conexao, "SELECT * FROM artigo WHERE id='$id'");

$sql = "UPDATE artigo SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=admin/listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=admin/listar'>Voltar</a>";
}
?>