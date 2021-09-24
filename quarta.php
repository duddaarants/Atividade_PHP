<?php 

/*4.Em épocas de pouco dinheiro, os comerciantes estão procurando aumentar suas vendas oferecendo desconto. 
Desenvolver um aplicativo que possa entrar com o valor de um produto e imprima o novo valor tendo em vista 
que o desconto foi de 9%.*/

	$valor = 39;
	$porcentagem = 9;
	$resultado = $valor - ($valor * $porcentagem / 100);
	echo " Valor do produto com desconto: $resultado";

 ?>