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
                 	echo $this->num1 + $this->num2;
                 } 

               }
               $calcu = new calculadora;
               $calcu->somar($_POST["num1"], $_POST["num2"]);
          ?>
     </div>  
</body>
</html>