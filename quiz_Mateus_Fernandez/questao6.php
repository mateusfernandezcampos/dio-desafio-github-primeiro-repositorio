<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 6	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q6.jpg">
	 <?php
        session_start();
        $_SESSION["q5"]=$_POST["questao5"];
      ?>
       <br><br>
   <div id="div1">
   <form action="questao7.php" method="post">

   <p class="fonte3"> Quantos jogadores estão presentes <br>  em uma partida de beisebol? <br> <br> </p> 
		 
     
      <div id="div2"> 
        <img class="imagem4" src="imagens/9.png">
        <p class="fonte2"><input name="questao6" type="radio" value="9 Jogadores" checked="true"> 9 Jogadores <br><br> </p> 
      </div> 
      
      <div id="div2"> 
        <img class="imagem4" src="imagens/11.jpg">
        <p class="fonte2"><input name="questao6" type="radio" value="11 Jogadores" > 11 Jogadores <br><br> </p> 
      </div> 
      
      <div id="div2"> 
        <img class="imagem4" src="imagens/6.png">
        <p class="fonte2"><input name="questao6" type="radio" value="6 Jogadores" > 6 Jogadores <br><br> </p> 
      </div> 
      
     
      <br> <br> 
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>