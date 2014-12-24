<!--Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico-->
<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Calculo da Altura</title>
    <link rel="stylesheet" href="index.css" type="text/css"/>
</head>
<body>
    <div>
         <?php
             $altu1 = isset($_POST["alt1"])?$_POST["alt1"]:0; 
             $altu2 = isset($_POST["alt2"])?$_POST["alt2"]:0; 
             $cres1 = isset($_POST["cre1"])?$_POST["cre1"]:0;
             $cres2 = isset($_POST["cre2"])?$_POST["cre2"]:0;

             $nome1  = isset($_POST["nom1"])?$_POST["nom1"]:0;
             $nome2  = isset($_POST["nom2"])?$_POST["nom2"]:0;  
            
             $ano = 0;
             $varcres1 = $cres1 / 100;
             $varcres2 = $cres2 / 100;
             //Algumas condiçoes importantes para se evitar o loop e erros matematicos...
             if ($altu1 > $altu2)  {echo "$nome1 já e maior que $nome2"; return;} 
             elseif ($altu1 == $altu2) {echo "$nome1 e $nome2 tem a mesma altura"; return;} 
             elseif ($cres1 < $cres2) {echo "$nome1 nunca será maior que $nome2"; return;}
             elseif ($cres1 == $cres2 ) {echo "$nome1 nunca será maior que $nome2"; return;}
             // se nenhuma destas condições estiver no meu formulario, então entraremos no 
             //loop
                 do {

                     if ($altu1 < $altu2)
                     
                     $altu1 = $altu1 + $varcres1;
                     $altu2 = $altu2 + $varcres2;
                     $ano   = $ano   + 1; }
                     while ($altu1 < $altu2); 
                    
 
                      echo "$nome1 ficara maior que $nome2 em $ano anos!";
        
         ?>
         <a href="javascript:history.go(-1)" class="botao" >Voltar</a>
    </div>
</body>
</html>