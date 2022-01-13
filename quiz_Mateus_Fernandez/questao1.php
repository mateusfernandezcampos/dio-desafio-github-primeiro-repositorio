 <!doctype html>
<html>
  <head>
   <meta charset="utf-8">
   <title>Questao 1</title>
   <link href="css/estilo.css" rel="stylesheet" type="text/css">
   
  </head>
 
  <body class=".imagem3" background="imagens/q1.jpg">



  <br> <br>
  <div id="div1">
  <form action="questao2.php" method="post">

		<p class="fonte3"> Qual dos seguintes esportes é jogado com uma bola?  <br> <br> </p> 
		 
    
		<div id="div2"> 
      <img class="imagem4" src="imagens/raquete.jpg">
      <p class="fonte2"> <input name="questao1" type="radio" value="Badminton" checked="true"> Badminton </p> 
    </div> 

		<div id="div2"> 
      <img class="imagem4" src="imagens/rugby.png">
      <p class="fonte2"> <input name="questao1" type="radio" value="Rugby" > Rugby </p> 
    </div>

		<div id="div2"> 
      <img class="imagem4" src="imagens/cavalo.jpg">
      <p class="fonte2"> <input name="questao1" type="radio" value="Hipismo" > Hipismo </p> 
    </div>
     
		
		

    <br> <br> <br> <br> <br> <br>
		
		  <input class="imagem2" type="image" src="imagens/seta.jpg" onClick="this.form.submit()">
		
    </form>
    </div>

    
	
  </body>
</html>