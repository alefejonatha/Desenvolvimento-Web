<?php
include "conecta.inc.php"; 

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM `usuario` WHERE login = '$login'";
$busca = mysqli_query($conexao, $sql);


while($dados = mysqli_fetch_array($busca)){
 $dblogin = $dados['login'];
 $dbsenha = $dados['senha'];
}

// ocultar php
ini_set('display_errors', 0 );
error_reporting(0);


if($dbsenha == $senha && $dblogin == $login){
 include_once('index.php');
}else{
 echo "<h2> login ou senha errado  </h2>";
 include_once('login.php');
}

?>