<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado Final	</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
  </head>
 
 <body class=".imagem3" background="imagens/esportes.jpg">
 <br> <br>
 <div id="div3">
	 <?php
     session_start();
     $_SESSION["q8"]=$_POST["questao8"];
   
		 
		 $resul1;	
		 $resul2;	
		 $resul3;	
		 $resul4;	
		 $resul5;	
		 $resul6;	
		 $resul7;	
		 $resul8;	
     $acertos=0;
	 if ($_SESSION["q1"]=="Rugby") {
		 $acertos++;
		 $resul1="<font color='#00FF68'> ✓ </font>";
	   } else {
			 $resul1="<font color='red'> X </font>";
		 }

	 if ($_SESSION["q2"]=="Monaco") {
		 $acertos++;
		 $resul2="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul2="<font color='red'> X </font>";
		}

	 if ($_SESSION["q3"]=="Grécia") {
		 $acertos++;
		 $resul3="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul3="<font color='red'> X </font>";
		}

	 if ($_SESSION["q4"]=="Capoeira") {
			$acertos++;
			$resul4="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul4="<font color='red'> X </font>";
		}

	 if ($_SESSION["q5"]=="Bola de Ouro") {
			$acertos++;
			$resul5="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul5="<font color='red'> X </font>";
		}

	 if ($_SESSION["q6"]=="9 Jogadores") {
			$acertos++;
			$resul6="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul6="<font color='red'> X </font>";
		}

	 if ($_SESSION["q7"]=="Ginástica olímpica e rítmica") {
			$acertos++;
			$resul7="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul7="<font color='red'> X </font>";
		}

	 if ($_SESSION["q8"]=="Neymar") {
			$acertos++;
			$resul8="<font color='#00FF68'> ✓ </font>";
	   } else {
			$resul8="<font color='red'> X </font>";
		}
	   
   
   echo "<p class='fonte1'>Você teve $acertos acerto(s)</p>";
   
	 echo "<br> <br> <h1> Resultados: <br> </h1>";
	 echo "<h2> 1: " . $_SESSION["q1"] . " - " . $resul1 . "</h2>";
	 echo "<h2> 2: " . $_SESSION["q2"] . " - " . $resul2 . "</h2>";
	 echo "<h2> 3: " . $_SESSION["q3"] . " - " . $resul3 . "</h2>";
	 echo "<h2> 4: " . $_SESSION["q4"] . " - " . $resul4 . "</h2>";
	 echo "<h2> 5: " . $_SESSION["q5"] . " - " . $resul5 . "</h2>";
	 echo "<h2> 6: " . $_SESSION["q6"] . " - " . $resul6 . "</h2>";
	 echo "<h2> 7: " . $_SESSION["q7"] . " - " . $resul7 . "</h2>";
	 echo "<h2> 8: " . $_SESSION["q8"] . " - " . $resul8 . "</h2>";

		 if ($acertos == 8){
			 echo "<p class='fonte2'> <br><br><br> Parabéns! Você acertou todas as questões!";
			 echo "<br> <img src='imagens/parabens.gif'/>";
		 }
	 
   

	?>
 <br> <br>

<form action="index.php" method="post">
 
		  <input class="imagem2" type="image" src="imagens/reiniciar.png" onClick="this.form.submit()" >
			<br>  <br>
 </div>
 </body>
</html>