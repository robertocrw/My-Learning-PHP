<DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"/>
     <title> Funcões PHP </title>
     <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
     <div>
         <?php
          class calculadora
             {
            	
              var $opt1;
            	var $opt2;
            	var $opt3;
            	
              function somar($number1, $number2) 
            	{   //Atenção que aqui não se coloca o $ no opt1
                  $this->opt1 = $number1 + $number2;
            	}
            	function multiplicar($number1, $number2)
            	{
            		  $this->opt2 = $number1 * $number2;
            	}
            	function resultado() //Não tem o : e nem ;
            	{
            		  $this->opt3 = $this->opt1 + $this->opt2;
            		  echo $this->opt3;
            	}
            
             }
      $clase = new calculadora;
      $clase->somar(2,2);
      $clase->multiplicar(3,3);
      $clase->resultado();
         ?>
     </div>
</body>
</html>	