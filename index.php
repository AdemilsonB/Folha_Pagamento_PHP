<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Folha de pagamento</title>

	<h1>Cálculo da Folha de pagamento</h1>
</head>
<body>

		
			<form action="pagamento.php" method="post">
		
		<p>
			
			<label>Nome do Funcionario</label><br>
			<input type="string" name="NF" placeholder="digite seu nome">

		</p>

		<p>
			
			<label>Horas Trabalhadas</label><br>
			<input type="number" name="HT" min="1" step="0.01" placeholder=" digite a qntd. de horas">

		</p>

		<p>
			
			<label>Valor por Hora</label><br>
			<input type="number" name="VH" min="1" step="0.01" placeholder="0,00">

		</p>

		<p>
			
			<button type="submit">Calcular</button>
			<button type="reset">Apagar</button>

		</p>

			</form>


</body>
</html>