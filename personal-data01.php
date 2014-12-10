<!--Entrar com nome, sexo e idade de uma pessoa. Se a pessoa 
for do sexo feminino e tiver menos que 25 anos, imprimir 
nome e a a mensagem: ACEITA. Caso contrário, imprimir nome
 e a mensagem: NÃO ACEITA.-->

<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
</head>
<body>
     <div>
         <?php 
		     $nome  = isset($_GET["nom"])  ?$_GET["nom"]:  "X";
			 $sexo  = isset($_GET["tsexo"])?$_GET["tsexo"]:"X";
			 $ano = isset($_GET["dat"])  ?$_GET["dat"]:    0;
			 $idade = date("Y") - $ano;
			 
			 if ($sexo == "mulher" and $idade < 25) { //mulher é o valor de value em html
			     echo "Olá $nome <br/> você foi ACEITA";
			 }
			 else  {
			     echo "Olá $nome <br/> você NÃO foi ACEITO";
			 }
			 
		 ?>
     </div>
</body>
</html>