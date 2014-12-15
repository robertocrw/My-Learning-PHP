<!--Exercicios 3-->
<!--Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)-->
<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title> Exercicio 3 </title>
</head>
<body>
     <div>
	     <?php 
		     $numero1 = isset($_GET['num1'])?$_GET['num1']:0;
			 $numero2 = isset($_GET['num2'])?$_GET['num2']:0;
			 $numero3 = isset($_GET['num3'])?$_GET['num3']:0;
			 //$dec= array($numero1);
			 $matr = array($numero1, $numero2, $numero3);
			 rsort($matr);
			 print_r($matr); //ATENÇÃO...fazer com que imprima somente os numeros e não as matrizes!
		 ?>
	 </div>
</body>
</html>