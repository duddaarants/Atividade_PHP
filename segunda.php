<?php 

$horastrabalhadas = 100;
$salhoras = 50;
$dep = 4;


$salariobruto= $horastrabalhadas*$salhoras;

printf("<br>O Salário bruto é: R$ ".$salariobruto."<br>");
echo "Descontos INSS";
	if ($salariobruto <= 1000){
	$inss = $salariobruto*8.5/100;
    printf("<br> Desconto INSS: R$".$inss);
}elseif ($salariobruto> 1000){
	$inss = $salariobruto*9/100;
    printf("<br> Desconto INSS: R$".$inss);
}

echo "<br> Descontos IR";
	if ($salariobruto <= 500){
	$ir = 0;
    printf("<br> Desconto IR: R$".$ir);
}elseif ($salariobruto> 500 and $salariobruto <= 1000){
	$ir = $salariobruto*5/100;
    printf("<br> Desconto IR: R$".$ir);
}else{
    $ir = $salariobruto * 7/10;
    printf("<br> Desconto IR: R$".$ir);
}

 ?>