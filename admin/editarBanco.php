<?php

$id = $_POST['id'];
$tituloPost = $_POST['tituloPost'];
$textoPost = $_POST['textoPost'];
$linkPost = $_POST['linkPost'];
$tituloArt = $_POST['tituloArt'];
$textoArt = $_POST['textoArt'];
$linkArt = $_POST['linkArt'];


$sql = "UPDATE artigo SET tituloPost='$tituloPost', textoPost='$textoPost', 
linkPost='$linkPost', tituloArt='$tituloArt', textoArt='$textoArt', linkArt='$linkArt' WHERE id='$id'";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar'>Voltar</a>";
}
?>