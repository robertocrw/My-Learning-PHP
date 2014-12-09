<!--Entrar com um número e informar se ele é divisível 
por 10, por 5, por 2 ou se não é divisível por nenhum destes -->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="utf-8" />
</head>	 
	 
<body>
     <div>
	     <?php 
		         $x = isset($_GET["ref"])?$_GET["ref"]:0; // este é o valor a ser analizado
				 
				 $y = array(10, 5, 2); // tive que criar uma matriz para ser possivel a divisão com as condiçoes
			     
				 // o $y[0] reprensata o numero 10 do vetor o $y[1] reprensata o numero 5 do vetor o $y[2] reprensata o numero 2 do vetor 
				 //$x % $y[arg] == 0 --> quer dizer se esta divisão obtem resto zero
				 
			     if ($x % $y[0] ==0 and $x % $y[1] == 0 and $x % $y[2] == 0) { //fiz tudo em uma estrutura as condiçoes que o exercicio pede
				     
			         echo "$x é divisivel por 10 por 5 e por 2";
			 }
			     else if ($x % $y[0] == 0) { // começei do inicio denovo para saber se esta era a unica resposta da condição
				     
			         echo "$x é divisivel por 10 com resto zero <br/> ";
			 }
			     else if ($x % $y[1] == 0) { // continuei para saber se esta era a unica resposta da condição
				     
			         echo "$x é divisivel por 5 com resto zero ";
			 }
			    else if ($x % $y[2] == 0) { // continuei para saber se esta era a unica resposta da condição
				     echo "$x é divisivel por 2 com resto zero";
				}
			    else {echo " $x não é divisivel por 10 por 5 e nem por 2 com resto zero <br/>";} // se nenhuma condições corresponde o exercicio
			 
		 ?>
	 </div>
</body>	 

</html>