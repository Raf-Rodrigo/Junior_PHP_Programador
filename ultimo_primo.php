<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cálculo de Primos</title>
</head>
<body>
	<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["valor"])){
			$valorErr = "Número Obrigatório";
		}else {
			$valor = $_POST["valor"];
		}
				
		function ultimoPrimo($valor){
			$listaPrimos = array();
			for($i = 1; $i <= $valor; $i++){
				$count = 0;
				for($j = 1; $j <= $i; $j++){
					if($i % $j ==0){
						$count++;
					}
				}
				if($count == 2){
					array_push($listaPrimos, $i);
				}
			}
			$posicao = count($listaPrimos)-1;
			if($listaPrimos[$posicao] == $valor){
				return $listaPrimos[$posicao-1];
			}else{
			return $listaPrimos[$posicao];
			}
		}	
	}
	?>
	<h3>Vamos ver qual o maior primo?</h3>
	<form method="POST" action="<?php ($_SERVER['PHP_REQUEST']);?>">
		Digite o Numero:<input type="number" name="valor" value="<?php echo $valor;?>">
		<span class="error">* <?php echo $valorErr;?></span>
		<input type="submit" name="submit" value="Calcular">
	</form>
	<br><br>
	<?php
		echo "O último número primo do valor digitado é:  ".ultimoPrimo($valor);
	?>
</body>
</html>
