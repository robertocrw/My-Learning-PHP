<!--Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title> Produto do numero </title>
	 <link rel="stylesheet" href="index.css"/>
</head>
<script>
     function verificaNum(form) {
	     var numero = form.num.value;
		 if (numero == "") {
		     alert("Por Favor Escolha Um Numero!");
			 form.num.focus();
			 return false;
		 }
	 }
</script>
<body>
     <div>                                                   <!--O "return" que esta declarado nesta linha é que faz com que apos o clik ele volte para o form-->
         <form method="post" name="form" action="produto.php" onclick="return verificaNum(this)";>
		     Digite um Nomero: <input type="number" name="num" max="99" min="1" selected />
			 <input type="submit" value="Enviar" class="botao"/>
		 </form>
	 </div>
</body>
</html>