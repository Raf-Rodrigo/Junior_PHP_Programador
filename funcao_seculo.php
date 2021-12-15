<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cálculo de Século</title>
	<style>
		.error {color:  #FF0000;}
	</style>
</head>
<body>
	<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["year"])){
			$yearErr = "Ano Obrigatório";
		}else {
			$year = $_POST["year"];
		}
				
		function seculoAno($year){
			$century = ceil($year/100);
			return $century;
		}
	}	
	?>
	<h3>Vamos ver qual o século?</h3>
	<p><span class="error">*obrigatório</span></p>
	<form method="POST" action="<?php ($_SERVER['PHP_REQUEST']);?>">
		Digite o ano:<input type="number" name="year" value="<?php echo $year;?>">
		<span class="error">* <?php echo $yearErr;?></span>
		<input type="submit" name="submit" value="Calcular">
	</form>
	<br><br>
	<?php
		echo "O século é: ". seculoAno($year);
	?>
</body>
</html>
