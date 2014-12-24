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
         <form method="post" action="calcule-altura.php">
             Nome: <input type="text" name="nom1" /><br/>
             Altura: <input type="text" name="alt1" /><br/>
             Cresce por Ano: <input type="number" name="cre1" max="10" min="0"/><br/>
             Nome: <input type="text" name="nom2" /><br/>
             Altura: <input type="text" name="alt2"/><br/>
             Cresce por Ano: <input type="number" name="cre2" max="10" min="0"/><br/>
             <input type="submit" class="botao" value="Calcular"/>
         </form>
    </div>
</body>
</html>