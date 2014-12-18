<!--A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo 
de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor
 tem 10 dias para devolver o livro o aluno somente 3 dias-->
 
 <DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8"/>
	 <title> Biblioteca </title>
	 <link href="index.css" rel="stylesheet"/>
	 <script language=javascript type="text/javascript">
	     function verificar(form) { //como coloquei valor dentre do parenteses sou abrigado a por o (thi) no formulario original
		     var book = form.book.value; // criei variaveis para que elas reprensentem os parametros do meu condigo na função
			 var nom = form.nom.value;
		     if (book == "" || nom == "") { // imponho a condição para que seje executado meu formulario
			     alert ("Complete as informações"); // caso a condição não seja cumprida sera esta a mensagem 
			 
			 
			     form.book.focus(); // focus faz com que o campo book seje destacado com as seta de digitação
			     return false;  // faz com que volte para o formulario caso a função seje nesseçario
			 }
			 
		 }
		 
	 </script>
 </head>
 <body>
     <div>                                                                         <!-- o (this) esta dizendo que é este formulario o referido da função script-->
	     <form method="get" action="biblioteca.php" name="form" onsubmit="return verificar(this)"> <!--sou obrigado o colocar o this para que a função funcione-->
		 O nome do livro:                                  <input type="text" name="book"/><br/>
		 Seu Nome:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="nom" placeholder="Primeiro e ultimo nome:"/><br/>
          <input type="radio" name="stats" value="Professor" /><label>Professor</label>
		  <input type="radio" name="stats" value="Estudante" checked/><label>Estudante</label><br/>
		  <input type="submit" name="enviar" value="Registrar" class="botao" /> <!--tenho que declarar o submit nesta linha tambem-->
		  
		 </form>
	 </div>
 </body>
 </html>