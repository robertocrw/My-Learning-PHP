<!--Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5 -->
<DOCTYPE html>
<html lang="pt-br"></html>
<head>
     <title>Soma de 2 numeros</title>
     <meta @charset="UTF-8"></meta>
</head>
<body>
     <div>
         <?php 
	         $receb1 = isset($_GET["ex1"])?$_GET["ex1"]:0;
			 $receb2 = isset($_GET["ex2"])?$_GET["ex2"]:0;
			 
			 $soma = $receb1 + $receb2; //declarado a variavel que vai representar a soma
			 
			 if ($receb1 + $receb2 >= 20) {
			     //$soma1 = $receb1 + $receb2; (não preciso declarar 2 variavel neste caso basta uma que é a $soma
				 echo ($soma + 8);
				}
             elseif ($receb1 + $receb2 <=20) {
			     //$soma2 = $receb1 + $receb2;
				 echo ($soma - 5);
			 }				
	     ?>
	 </div>
</body>
</html>