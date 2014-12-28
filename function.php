<DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"/>
     <title> Funcões PHP </title>
     <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
     <div><?php
			class Carro {
			 
			    var $cor;
			    var $numero_portas;
			    var $marca;
			    var $gasolina = 0;
			    
			    function encherTanque($gasolina_nova){
			        $this->gasolina = $this->gasolina + $gasolina_nova;
			    }
			 
			    function acelerar(){
			        if ($this->gasolina > 1){
			            $this->gasolina = $this->gasolina - 1;
			            echo "Gasolina restante: $this->gasolina<br/>";
			        }
			        else {echo "Acabou a gasolina<br/>";}
			    }
			}
			 
			$carro = new Carro(); // Instanciamos a classe Carro
			$carro->cor = 'Rojo'; 
			$carro->marca = 'Honda';
			$carro->numero_portas = 4;
			$carro->encherTanque(10); // utilizamos os metodos
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
			$carro->acelerar();
     ?>
     </div>
</body>
</html>	