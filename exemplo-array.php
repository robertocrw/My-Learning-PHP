<DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"/>
     <title> Exemplos de array </title>
     <link rel="stylesheet" href="index.css" type="text/css"/>
</head>
<body>
     <div>
         <?php 
             $var1 = isset($_POST["num"])?$_POST["num"]:0;
             //O campo de texto aparece como somente uma matriz 
             $var2 = ($var1);
             print_r($var2);
         ?>
     </div>
</body>
</html>