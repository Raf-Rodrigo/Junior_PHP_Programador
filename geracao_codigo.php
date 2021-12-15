<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Geração de Números</title>
</head>
<body>
	<?php	
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$lista = array();
			for ($i = 1; $i <= 20; $i++){
				$gerar = rand(1, 10);
				array_push($lista, $gerar);
				switch($gerar){
					case 1:
						$itens1++;
						break;
					case 2:
						$itens2++;
						break;
					case 3:
						$itens3++;
						break;
					case 4:
						$itens4++;
						break;
					case 5:
						$itens5++;
						break;
					case 6:
						$itens6++;
						break;
					case 7:
						$itens7++;
						break;
					case 8:
						$itens8++;
						break;
					case 9:
						$itens9++;
						break;
					case 10:
						$itens10++;
						break;
				}
			}
			sort($lista);
			$quantasVezesQueAparece = max(array_count_values($lista)); 
			if($itens1 == $quantasVezesQueAparece){
				$numero = 1;
			}else if($itens2 == $quantasVezesQueAparece){
				$numero = 2;
			}else if($itens3 == $quantasVezesQueAparece){
				$numero = 3;
			}else if($itens4 == $quantasVezesQueAparece){
					$numero = 4;
			}else if($itens5 == $quantasVezesQueAparece){
					$numero = 5;
			}else if($itens6 == $quantasVezesQueAparece){
					$numero = 6;
			}else if($itens7 == $quantasVezesQueAparece){
					$numero = 7;
			}else if($itens8 == $quantasVezesQueAparece){
					$numero = 8;
			}else if($itens9 == $quantasVezesQueAparece){
					$numero = 9;
			}else{
				$numero =10;
			}	
		}
	?>
	<h3>Gera lista com 20 números inteiros e mostrar qual se repete mais vezes</h3>
	<form method="POST" action="<?php ($_SERVER['PHP_REQUEST']);?>">
		<input type="submit" name="submit" value="Gerar">
	</form>
	<br><br>
	<p>A lista gerada foi:</p>
	<?php foreach($lista as $valor){
			echo " {$valor} ";
		}?>
	<br><br>
	<?php 
	echo "O valor que mais aparece é: ".$numero." e 
	aparece ".$quantasVezesQueAparece." vezes"; ?>
	
</body>
</html>
