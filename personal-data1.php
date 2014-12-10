<!--Entrar com nome, sexo e idade de uma pessoa. Se a pessoa 
for do sexo feminino e tiver menos que 25 anos, imprimir 
nome e a a mensagem: ACEITA. Caso contrário, imprimir nome
 e a mensagem: NÃO ACEITA.-->
<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta @charset="UTF-8"/>
	 <title>Personal Date Request</title>
</head>
<body>
     <div>
	     <form  method="get" action="personal-data01.php">
		     Nome: <input type="text" name="nom"/><br/>
			 <!--como estou trabalhando com type radio tenho que declarar valores em value para poder manipular em php-->
			 Sexo:<input type="radio" name="tsexo" id="masc" checked value="homem"/><label for="masc">Masculino</label>
			      <input type="radio" name="tsexo" id="fem" value="mulher" /><label for="fem">Feminino</label><br/> 
											
			 Idade:<input type="number" name="dat" max="2050" min="1900"/>
			 <input type="submit" value="Enviar"/>
		 </form>
	 </div>
</body>
</html> 