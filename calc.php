<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
     <title></title>
     <link/>
</head>
<body>
     <div>
          <?php
              
              class calculadora 
               {
                  var $num1;
                  var $num2;
                  
                  //var $multiplicar;
                 function somar($nu1,$nu2) 
                 {
                 	$this->num1 = $nu1;
                 	$this->num2 = $nu2;
                  $operacao = ($_POST["opt"]);
                  if ($operacao == "+") {
                 	echo $this->num1 + $this->num2;
                 }
                 } 
                 function multiplicar($nu1,$nu2) 
                 {
                  $this->num1 = $nu1;
                  $this->num2 = $nu2;
                  $operacao = ($_POST["opt"]);
                  if ($operacao == "*") {
                  echo $this->num1 * $this->num2;
                 }
                 } 
                 function dividir($nu1,$nu2) 
                 {
                  $this->num1 = $nu1;
                  $this->num2 = $nu2;
                  $operacao = ($_POST["opt"]);
                  if ($operacao == "/") {
                  echo $this->num1 / $this->num2;
                 }
                 } 
                 function subtrair($nu1,$nu2) 
                 {
                  $this->num1 = $nu1;
                  $this->num2 = $nu2;
                  $operacao = ($_POST["opt"]);
                  if ($operacao == "-") {
                  echo $this->num1 - $this->num2;
                  } 
                  } 
                 function exponencial($nu1,$nu2) 
                 {
                  $this->num1 = $nu1;
                  $this->num2 = $nu2;
                  $operacao = ($_POST["opt"]);
                  if ($operacao == "exp") {
                  echo pow($this->num1,  $this->num2); //Atenção para exponencial
                 }
                 } 

               }
               $calcu = new calculadora;
               $calcu->somar($_POST["num1"], $_POST["num2"]);
               $calcu->multiplicar($_POST["num1"], $_POST["num2"]);
               $calcu->dividir($_POST["num1"], $_POST["num2"]);
               $calcu->subtrair($_POST["num1"], $_POST["num2"]);
               $calcu->exponencial($_POST["num1"], $_POST["num2"]);
          ?>
     </div>  
</body>
</html>