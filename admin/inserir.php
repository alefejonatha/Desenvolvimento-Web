<H1>Inserir</H1>

<form id="contactForm" action="?pg=inserirBanco" method="POST" enctype="multipart/form-data">
    <label>Titulo do Card: </label>
        <input class="form-control" name="tituloCard" type="text"/>
        
    <label>Texto do Card: </label>
    <textarea class="form-control" name="textoCard" id="texto"></textarea>

    <label>Foto do Card: </label>
      <input type="file" name="assets" class="m-3">
      
      <br>
    <label>Titulo do Artigo: </label>
       <input class="form-control" name="tituloArt" type="text"/>

    <label>Texto do Artigo: </label>
    <textarea class="form-control" name="textoArt" id="texto"></textarea>

    <label>Link do video: </label>
       <textarea class="form-control" name="linkVideoArt" id="texto"></textarea>
    <hr>
    <button class="btn btn-primary" name="Enviar" type="submit">Cadastrar</button>
</form>
