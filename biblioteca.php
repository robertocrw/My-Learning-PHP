<!--A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo 
de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor
 tem 10 dias para devolver o livro o aluno somente 3 dias-->
 <DOCTYPE html>
 <html lang="pt-br">
 <head>
     <link href="index.css" rel="stylesheet"/>
     <meta charset="UTF-8"/>
	 <title> Biblioteca </title>
 </head>
 <body>
     <div>
	     <?php
		     $var1 = isset($_GET["book"])?$_GET["book"]:0;
			 $var2 = isset($_GET["stats"])?$_GET["stats"]:0;
			 $var3 = isset($_GET["nom"])?$_GET["nom"]:0;
			 $vardate = date('d-m-y');
             if($var2 == "Professor") { //cuidado com para não colocar o : apos o () do if
			     echo "$var2: $var3 <br/> Livro: $var1 <br/> ";
			     echo "Prazo de devolução 10 dias a partir do dia: $vardate";
			}
			
			 elseif ($var2 == "Estudante") { //cuidado com para não colocar o : apos o () do elseif
			     echo "$var2: $var3  <br/> Livro: $var1 <br/> ";
				 echo "Prazo de devolução 3 dias a partir do dia: $vardate";
			}
			 

		 ?>
		 <a href="javascript:history.go(-1)" class="botao">Voltar</a>
		 <br/>
		 
	 </div>
 </body>
 </html>