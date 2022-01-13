<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 7	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q7.jpg">
	 <?php
        session_start();
        $_SESSION["q6"]=$_POST["questao6"];
      ?>
      <br><br>
   <div id="div1">
   <form action="questao8.php" method="post">

   <p class="fonte3"> Quais são os tipos de ginástica <br>  que estão presentes nas Olímpiadas? <br>  </p> 
		 
     
      <div id="div2"> 
        <img class="imagem6" src="imagens/olimpica.png">
        <p class="fonte2"><input name="questao7" type="radio" value="Ginástica rítmica, artística e olímpica" checked="true"> Ginástica rítmica, <br> artística e olímpica <br><br> </p> 
      </div> 
      
      <div id="div2"> 
        <img class="imagem6" src="imagens/artistica.png">
        <p class="fonte2">  <input name="questao7" type="radio" value="Ginástica olímpica e artística" > Ginástica olímpica <br> e artística <br><br> </p> 
      </div> 
      
       <div id="div2"> 
        <img class="imagem6" src="imagens/ritmica.png">
        <p class="fonte2">  <input name="questao7" type="radio" value="Ginástica olímpica e rítmica" > Ginástica olímpica <br> e rítmica <br><br> </p> 
      </div> 
      
     
      <br> <br> 
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>