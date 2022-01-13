<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 4	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class="imagem3" background="imagens/q4.jpg">
	 <?php
        session_start();
        $_SESSION["q3"]=$_POST["questao3"];
      ?>
   <br><br>
   <div id="div1">
   <form action="questao5.php" method="post">

   <p class="fonte3"> Qual das seguintes modalidades<br> de luta foi criada no Brasil?  <br> <br> </p> 
		 
     
      <div id="div2"> 
        <img class="imagem4" src="imagens/kungfu.jpg">
        <p class="fonte2"><input name="questao4" type="radio" value="Kung Fu" checked="true"> Kung Fu <br><br> </p> 
      </div> 
      
      <div id="div2"> 
        <img class="imagem4" src="imagens/jiujitsu.jpg">
        <p class="fonte2"><input name="questao4" type="radio" value="Jiu-Jitsu" > Jiu-Jitsu <br><br> </p> 
      </div> 
      
      <div id="div2"> 
        <img class="imagem4" src="imagens/capoeira.PNG">
        <p class="fonte2"><input name="questao4" type="radio" value="Capoeira" > Capoeira <br><br> </p> 
      </div> 
      
     
      <br> <br> 
		
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>