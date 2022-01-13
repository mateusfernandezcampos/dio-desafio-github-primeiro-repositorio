<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 8	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q1.jpg">
	 <?php
        session_start();
        $_SESSION["q7"]=$_POST["questao7"];
      ?>
      <br><br>
   <div id="div1">
   <form action="resultado.php" method="post">

   <p class="fonte3"> Qual dos jogadores abaixo <br> é brasileiro? <br> <br> </p> 
		 
   

   
      <div id="div2"> 
        <img class="imagem6" src="imagens/mbappe.png">
        <p class="fonte2"><input name="questao8" type="radio" value="Mbappé" checked="true"> Mbappé <br><br> </p> 
      </div>
      
      <div id="div2"> 
        <img class="imagem6" src="imagens/messi.PNG">
        <p class="fonte2">  <input name="questao8" type="radio" value="Messi" > Messi <br><br> </p> 
      </div>
      
      <div id="div2"> 
        <img class="imagem6" src="imagens/neymar.PNG">
        <p class="fonte2">  <input name="questao8" type="radio" value="Neymar" > Neymar <br><br> </p> 
      </div>
    
     
      <br> <br> 
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>