<?php include_once('topo.php'); ?>
<hr>
<div class="cont">
    <div class= "d-flex flex-row">
        <div class="d-flex flex-column" id="right">
            <h3>Últimas Notícias</h3>
            
            <?php
                $busca = "Select * from artigo order by id desc";
                $todos = mysqli_query($conexao, $busca);
            ?>

            <?php while($dados = mysqli_fetch_array($todos)) {?>
                <div class="row align-items-center p-4">
                        <div class="col-3">
                            <img src="<?=$dados['linkPost']?>" class="imgArt" alt="" srcset="">
                        </div>
                        <div class="col-6">
                        <a href="?pg=poster&dadosId=<?=$dados['id']?>" class="" style="text-decoration:none"  >
                                <h3><?=$dados['tituloPost']?></h3>
                            </a>
                	        <p><?=$dados['textoPost']?></p>
                        </div>
                    </div>                    
                    <span class="border-bottom"></span>
            <?php } ?>

        </div>  
            
            <div class="col-4 p-5">
               
                
               <div class="card text-body" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title ">Inscreva-se</h5>
                    <p class="card-text">Assine o WikiMusic e tenha acesso vip.</p>
                    <a href="#" class="btn btn-primary">assinar</a>
                  </div>
                </div>
                <br>
               <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Secondary card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Success card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Danger card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Warning card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Info card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card bg-light mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Light card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>
               <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                 <div class="card-header">Header</div>
                 <div class="card-body">
                   <h5 class="card-title">Dark card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
               </div>  
                           
                           


            </div>

    </div>    
</div>