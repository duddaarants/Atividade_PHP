<?php 


$codigo = 4;
$valor = 100;

switch ($codigo) {
    case 1:
        $valor = $valor + ($valor*10/100);
        echo "O valor do produto:".$valor."<br/>";
        break;

    case 2:
        $valor = $valor + ($valor*25/100);
        echo "O valor do produto:".$valor."<br/>";
        break;

    case 3:
        $valor = $valor + ($valor*30/100);
        echo "O valor do produto:".$valor."<br/>";
        break;

    case 4:
        $valor = $valor + ($valor*50/100);
        echo "O valor do produto:".$valor."<br/>";
        break;

    
    default:
    
        break;
}


?>