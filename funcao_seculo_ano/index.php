<?php 

function seculoAno($ano){
	// Validacao do valor para menor que 1, tambem pode se incluir validacao de valor maximo nessa mesma condicao com um >=2021 por exemplo 
	if($ano < 1)
		return " Valor inválido. Digite um valor maior ou igual a 1";
	if($ano == 1)
		return 1;

	// Diminuimos dois anos do valor passado para o caso de ser o fim ou inicio do sec ex (100, 101, 200, 201)
	$seculo = intval(($ano -2)/100) +1; 
	return $seculo;
}

echo "Ano 1905 = século ".seculoAno(1905)."<br>";
echo "Ano 1700 = século ".seculoAno(1700);