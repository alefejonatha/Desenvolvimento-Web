<?php

$id = $_GET['id'];
$sql = "DELETE FROM artigo WHERE id = ('$id')";
$delete = mysqli_query($conexao, $sql);

if(!$delete){
    echo "Não foi possível excluir registro. <a href='?pg=admin/inserir'>Tente Novamente</a>";
}else{
    echo "<h3>Registro excluído com sucesso!</h3>";
    include_once("listar.php");
}


?>