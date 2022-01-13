<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 2 	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q2.jpg">
	<?php
       session_start();
       $_SESSION["q1"]=$_POST["questao1"];
    ?>
    <br><br>
  <div id="div1">
  <form action="questao3.php" method="post">

  <br><p class="fonte3"> Qual dos seguintes times de futebol está<br> situado na liga Francesa?  <br> <br> </p> 
		 
    
      <div id="div2"> 
        <img class="imagem4" src="imagens/monaco.png">
        <p class="fonte2"> <input name="questao2" type="radio" value="Monaco" checked="true"> Monaco </p> 
      </div> 

      <div id="div2"> 
        <img class="imagem4" src="imagens/chelsea.png">
        <p class="fonte2"><input name="questao2" type="radio" value="Chelsea" > Chelsea </p> 
      </div> 

      <div id="div2"> 
        <img class="imagem4" src="imagens/juventus.png">
        <p class="fonte2"><input name="questao2" type="radio" value="Juventus" > Juventus </p> 
      </div> 
      
     
      <br> <br> <br> <br> <br> <br>
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
      <br>
		</div>
 
  </form>
	
  </body>
</html>