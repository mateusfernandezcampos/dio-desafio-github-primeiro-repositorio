<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 5	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q5.jpg">
	 <?php
        session_start();
        $_SESSION["q4"]=$_POST["questao4"];
      ?>
      <br><br>
   <div id="div1">
   <form action="questao6.php" method="post">

   <p class="fonte3"> Qual o nome do prêmio concedido ao considerado melhor  <br> jogador  de futebol do mundo do ano?  <br> <br> </p> 
		 
     
      <div id="div2"> 
        <img class="imagem6" src="imagens/bola_diamante.jpg">
        <p class="fonte2"><input name="questao5" type="radio" value="Bola de Diamante" checked="true"> Bola de Diamante <br><br> </p> 
      </div> 

      <div id="div2"> 
        <img class="imagem6" src="imagens/bola_ouro.jpg">
        <p class="fonte2"><input name="questao5" type="radio" value="Bola de Ouro" > Bola de Ouro <br><br> </p> 
      </div> 

      <div id="div2"> 
        <img class="imagem6" src="imagens/bola_cristal.jpg">
        <p class="fonte2"><input name="questao5" type="radio" value="Bola de Cristal" > Bola de Cristal <br><br> </p> 
      </div> 
      
     
      <br> <br> 
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>