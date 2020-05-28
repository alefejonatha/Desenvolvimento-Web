<?php

$tituloCard = $_POST['tituloCard'];
$textoCard = $_POST['textoCard'];
$linkFotoCard = $_POST['linkFotoCard'];
$tituloArt = $_POST['tituloArt'];
$textoArt = $_POST['textoArt'];
$linkVideoArt = $_POST['linkVideoArt'];

$sql = "INSERT INTO artigo VALUES 
(NULL, '$tituloCard', '$textoCard', '$linkFotoCard', '$tituloArt', '$textoArt', '$linkVideoArt')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>";
}
?>