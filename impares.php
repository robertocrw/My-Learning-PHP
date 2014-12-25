<!--Escreva um algoritmo em que imprima todos os números ímpares do
intervalo fechado de 1 a 100.-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8" />
     <title> Impares </title>
     <link rel=""stylesheet" href="index.css" type="text/css"/>
</head>
<body>
     <div>
     	  <?php 
              foreach (range(1,100) as $var1) {
              
              if (($var1 % 2) != 0) {
               echo  "$var1 é impar<br/>";  
              }}
     	  ?>
     </div>
</body>
</html>

<!--Continua-->