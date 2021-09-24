<?php 

$valorhoraaula = 100;
$numaulas = 50;
$porcentagem = 10;


$salariobruto= $valorhoraaula*$numaulas;

echo "O Salário bruto é: R$ $salariobruto";
echo "<br>";
$resultado = $salariobruto - ($salariobruto * $porcentagem / 100);
echo " Valor do salário com desconto: $resultado";


 ?>