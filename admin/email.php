<h1>Mensagens</h1>
<?php
    $busca = "Select * from faleconosco";
    $todos = mysqli_query($conexao, $busca);
?>
<?php while($dados = mysqli_fetch_array($todos)) {?>
    <div class="row align-items-center p-4">
            <div class="col-6">                
                <h3><?=$dados['nome']?></h3>
                <h4><?=$dados['email']?></h4>                
    	        <p><?=$dados['texto']?></p>
            </div>           
        </div>                    
        <span class="border-bottom"></span>
<?php } ?>