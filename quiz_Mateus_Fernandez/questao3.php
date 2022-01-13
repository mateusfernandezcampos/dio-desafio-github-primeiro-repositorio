<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 3	</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
  <body class=".imagem3" background="imagens/q3.jpg">
	 <?php
        session_start();
        $_SESSION["q2"]=$_POST["questao2"];
      ?>
      <br><br>
      <div id="div1">
   <form action="questao4.php" method="post">

    <p class="fonte3"> As olímpiadas foram criadas em qual país?  <br> <br> </p> 
		 
     
      <div id="div2"> 
        <img class="imagem5" src="imagens/grecia.jpg">
        <p class="fonte2"> <input name="questao3" type="radio" value="Grécia" checked="true"> Grécia <br><br> </p> 
      </div>

      <div id="div2"> 
        <img class="imagem5" src="imagens/alemanha.jpg">
        <p class="fonte2"> <input name="questao3" type="radio" value="Alemanha" > Alemanha <br><br> </p> 
      </div>
      
      <div id="div2"> 
        <img class="imagem5" src="imagens/paquistao.jpg">
        <p class="fonte2"><input name="questao3" type="radio" value="Paquistão" > Paquistão <br><br> </p> 
      </div>
       
     
      <br> <br> 
		 
		  <input  class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		</div>
 
	 
		

  </form>    
	
  </body>
</html>