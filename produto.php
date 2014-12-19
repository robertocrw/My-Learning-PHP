<!--Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title>Produto do numero</title>
	 <link rel="stylesheet" href="index.css"/>
</head>
<body>
     <div>
	     <?php 
		     $var1 = isset($_POST["num"])?$_POST["num"]: 0;
			 
			 for ($cont = 1; $cont <= $var1; $cont++) {
			     $cont2 = $cont * $var1;
				 echo "$var1 * $cont = $cont2 <br/>";
			 }
		 ?>
	 </div>
</body>
</html>