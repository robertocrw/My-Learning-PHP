<!--Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title> Positivo Negativo </title>
	 <link rel="stylesheet" href="index.css"/>
</head>
<script>
     function verifica(form) {
	     var $contador = form.num.value.length; 
		     for ( $contador = 0; $contador <= 20; $contador++ ) {
			     if( $contador < 5)
			     alert("Por favor digitevo 20 numero");
				 form.num.focus();
				 return false;
				 
			 }
		 
	 }
</script>
<body>
     <div>
	     <form method="post" action="positivo-negativo.php" name="form" onclick="return verifica(this)";>
		     Digite 20 numeros Positivos e Negativos: <input type="text" name="num"  />
			 <input type="submit" class="botao" value="Enviar"/>
		 </form>
	 </div>
</body>
</html>