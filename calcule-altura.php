<!--Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico-->
<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Calculo da Altura</title>
    <link rel="stylesheet" href="index.css" type="text/css"
</head>
<body>
    <div>
         <?php
             $altu1 = isset($_POST["alt1"])?$_POST["alt1"]:0; 
             $altu2 = isset($_POST["alt2"])?$_POST["alt2"]:0; 
             $cres1 = isset($_POST["cre1"])?$_POST["cre1"]:0;
             $cres2 = isset($_POST["cre2"])?$_POST["cre2"]:0;
             

             
         ?>
         <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>