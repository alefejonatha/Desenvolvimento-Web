<?php

$pasta = '../assets';
if (!is_writable($pasta)) {
    echo 'O diretório não possui permissão de escrita.';
}else if(isset($_FILES['assets'])){
    date_default_timezone_set("Brazil/East"); 
    
$ext = strtolower(substr($_FILES['assets']['name'],-4)); 
$new_name = date("Y.m.d-H.i.s") . $ext; 
      
$dir = '../assets/'; 
}      
      

$tituloCard = $_POST['tituloCard'];
$textoCard = $_POST['textoCard'];
$linkFotoCard = $dir.$new_name; //
$tituloArt = $_POST['tituloArt'];
$textoArt = $_POST['textoArt'];
$linkVideoArt = $_POST['linkVideoArt'];



$sql = "INSERT INTO artigo VALUES 
(NULL, '$tituloCard', '$textoCard', '$linkFotoCard', '$tituloArt', '$textoArt', '$linkVideoArt')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
     
      move_uploaded_file($_FILES['assets']['tmp_name'], $dir.$new_name); 
     
   echo "<h3>Cadastrada com sucesso!</h3>";
   include_once("listar.php");
}
?>
