<h1>Listar</h1>
<?php
    $busca = "Select * from artigo order by id desc";
    $todos = mysqli_query($conexao, $busca);
?>
<?php while($dados = mysqli_fetch_array($todos)) {?>
    <div class="row align-items-center p-4">
            <div class="col-6">
                <a href="?pg=poster&dadosId=<?=$dados['id']?>" class="" style="text-decoration:none">
                    <h3><?=$dados['tituloPost']?></h3>
                </a>
    	        <p><?=$dados['textoPost']?></p>
            </div>
            <div>
                <a href="?pg=excluir&id=<?=$dados['id']?>">            
                    <button type="button" class="col-12 btn btn-danger">Excluir</button>
                </a>
            </div>
            <div>
            <a href="?pg=editar&id=<?=$dados['id']; ?>">
                <button type="button" class="m-1 col-12 btn btn-warning">Editar</button>
            </a>
            </div>
        </div>                    
        <span class="border-bottom"></span>
<?php } ?>