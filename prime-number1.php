<!DOCTYPE html>
<html lang="pt-br">
     <head>
	     <link rel="stylesheet" href="_css/estilo.css"/>
	     <meta charset="utf-8"/>
		 <title>Primeiro programa PHP</title>
		 <style>
		 
		 </style>
	 </head>
	 <body>
	     <div>
		     <?php 
			     $recebe = isset($_GET["num"])?$_GET["num"]:1; //vai buscar o numero selecionado na outra pagina n-primos.php
				     echo "<h1> Analisando o número $recebe ...</h1>"; //imprime este numero que foi selecionado
				     echo "<br/> Valores m&uacute;ltiplos: "; //imprime esta mensagem e espera que se conclua a condição if primeiro*
				 $mult = 0; // iniciei uma variavel contadora 
				 for ($contador = 1; $contador <= $recebe; $contador++) { // criei uma segunda variavel contadora, que vai analisar as seguintes situação
	/*primeiro*/		 if ($recebe % $contador == 0) { // apos analizar as condiçoes a variavel que recebe o valor da outra pagina vai analiza se existe resto zero entre a a segunda variavel contadora.
					     $mult++; //a primeira variavel vai somar 1 em 1
						 echo "$contador "; // imprime a variavel segunda contadora com os seus respectivos multiplos 
					     
					}
				 }
				 
		         echo "<p> Total de m&uacute;ltiplos: $mult </p>"; //imprime a mensagem e espera que se conclua a condição if segundo*
		         echo "<h2> Resultado: $recebe <span class='foco'>"; //imprime a variavel que recebe valor da outra pagina
	/*Segundo*/	     if ($mult <= 2) { // se a segunda variavel contadora for menor igual a 2
			         echo " &Eacute; PRIMO! "; // se a condição for verdadeira então é porque a variavel é primo
		         }    
		         else {
			         echo " N&Atilde;O &Eacute; PRIMO! "; // se não é por que não é primo
		         }
		        echo "</span></h2>"; 
             ?>
			  <a href="n-primos.php" class="botao>Voltar</a> 
		 </div>
	 </body>
</html>	