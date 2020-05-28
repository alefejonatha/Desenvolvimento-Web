<div class="container">
	<br>
	<hr>
  <h2>FALE CONOSCO</h2> 
  <form  id="contactForm" action="?pg=contatodb" method="post">
     
	 
	 <label>Nome:</label> 
	 <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
	 E-mail: <input type="email" class="form-control" name="email"/>
	 Telefone: <input type="tel" class="form-control" name="phone"/>
	 <!--Assunto: <input type="text" class="form-control" name="texto"/> -->
	 Mensagem:<textarea class="form-control" name="texto" rows="5" cols="10"></textarea><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>