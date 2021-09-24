<?php

/*7. Eftuar o cálculo da quantidade de litros de combustível gastos em uma viagem, sabendo-se que o carro faz 12 km com um litro. Deverão ser fornecidos o tempo gasto na viagem e a velocidade média. Utilizar as seguintes fórmulas: distância = tempo * velocidade litros usados = distancia /12 */

$tempo = 2;
$veloc = 70;

	$dist = $tempo * $veloc;
	$lit = $dist / 12;

	echo "A quantidade de litros de combustível gastos foram:$lit";


?>