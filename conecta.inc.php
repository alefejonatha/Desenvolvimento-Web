
<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","login","senha", "id13945553_minisite");
    

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "id13945553_minisite");
    
    // Executando query e retornando valores da tabela "faleconosco"
    $query = mysqli_query($conexao, "SELECT * FROM faleconosco");    

    
?>