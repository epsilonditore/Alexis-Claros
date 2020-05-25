<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	
	switch ($operador) {
		case '+':
			$solucion = $operando1 + $operando2;
			break;
		case '-':
			$solucion = $operando1 - $operando2;
			break;

		case '*':
			$solucion = $operando1 * $operando2;
			break;

		case '/':
			$solucion = $operando1 / $operando2;
			break;
		
		default:
			echo "Error de ingreso";
			break;

	}
	echo "El resultado es: " .$solucion; 
?>
