<DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8"/>
	 <title>Condições do mes</title>
	 <link rel="stylesheet" href="index.css"/>
</head>
<body>
     <div>
     <?php 
	     $mes = isset($_GET['num'])?$_GET['num']:0;

		 switch ($mes) {
		     
		    case 1:
			     echo ("JANEIRO");
				 break;
			case 2:
			     echo ("FEVEREIRO");
				 break;
			case 3:
			     echo ("MARÇO");
				 break;
			case 4:
			     echo ("ABRIL");
				 break;
			case 5:
			     echo ("MAIO");
				 break;
            case 6:
			     echo ("JUNHO");
				 break;
            case 7:
			     echo ("JULHO");
				 break;
            case 8:
			     echo ("AGOSTO");
				 break;
            case 9:
			     echo ("SETEMBRO");
				 break;
            case 10:
			     echo ("OUTUBRO");
				 break;
            case 11:
			     echo ("NOVEMBRO");
				 break;
            case 12:
			     echo ("DEZEMBRO");	
                 break;	
            case ($mes < 1):
                 echo ("NÃO EXISTE MES COM ESTE NUMERO");
                 break;	
            case ($mes > 12):
                 echo ("NÃO EXISTE MES COM ESTE NUMERO");
                 break;				
             }
	 ?>
	 <a href="javascript:history.go(-1)" class="botao" >Voltar</a>
	 </div>
</body>
</html>