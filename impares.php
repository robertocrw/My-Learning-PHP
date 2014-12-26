<!--Escreva um algoritmo em que imprima todos os números ímpares do
intervalo fechado de 1 a 100.-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8" />
     <title> Impares </title>
     <link rel="stylesheet" href="index.css" type="text/css"/>
</head>
<body>
     <div>
     	  <?php 
              $var1 = isset($_POST["comeco"])?$_POST["comeco"]:0;
              $var2 = isset($_POST["fim"])?$_POST["fim"]:0;
              
              foreach (range($var1,$var2) as $var1) {
              //Repare que o a manipulação esta com a mesma variavel $var1
              //do range e do inicio
              if (($var1 % 2) != 0) {
               echo  "$var1 é impar<br/>";  
              }}
     	  ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
     </div>
</body>
</html>

<!--Continua-->