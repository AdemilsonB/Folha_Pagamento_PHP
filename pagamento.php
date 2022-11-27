<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade</title>
</head>
<body>

	<h1>Folha de Pagamento</h1>





		<?php

		if (!empty($_POST["NF"]) && !empty($_POST["HT"]) && !empty($_POST["VH"])) 

		{
			{

				$NF = $_POST["NF"];			//váriaveis do primeiro cálculo
				$HT = $_POST["HT"];			
				$VH = $_POST["VH"];						

				echo "<h4>Nome: $NF</h4>";
				echo "<h4>horas Trabalhadas: $HT Horas</h4>";
				echo "<h4>Valor por Hora: R$ $VH</h4><br>";

			}

				$salariob = ($HT * $VH); 	//cálculo do sálario bruto

					echo "<h4> Sálario Bruto: R$ $salariob</h4>"; 






				if ($salariob <= 1372.81)
				{
					$ir = $salariob * 0;

					echo "<h4>IR: R$ $ir</h4>";
				}

				elseif ($salariob <= 2743.25) 
				{
					$ir = $salariob * 0.15;

					echo "<h4>IR: R$ $ir</h4>";
				}

				else
				{
					$ir = $salariob * 0.275;

					echo "<h4>IR: R$ $ir</h4>";
				}






				if ($salariob <= 863.29)
				{
					$inss = $salariob * 0.08;
					
					echo "<h4>INSS: R$ $inss</h4>";
				}

				elseif ($salariob <= 1447.14)
				{
					$inss = $salariob * 0.09;
					
					echo "<h4>INSS: R$ $inss</h4>";
				}

				elseif ($salariob <=  2894.28)
				{
					$inss = $salariob * 0.11;
					
					echo "<h4>INSS: R$ $inss</h4>";
				}

				else
				{
					$inss = "318.37";

					echo "<h4>INSS: R$ $inss</h4>";
				}







				$fgts = $salariob * 0.08; 

					echo "<h4>FGTS: R$ $fgts</h4>"; 
			







				$sl = ($salariob - $ir - $inss); 

					echo "<h4>Salário Líquido: R$ $sl</h4>";

		}




		if (empty($_POST["NF"])) 
		{
			echo "<h6><br>Preencha todos os campos do formulário antes de efetuar o cálculo!<br><br></6>";
		}

		elseif (empty($_POST["HT"])) 
		{
			echo "<h6><br>Preencha todos os campos do formulário antes de efetuar o cálculo!<br><br></6>";
		}

		elseif (empty($_POST["VH"])) 
		{
			echo "<H6><br>Preencha todos os campos do formulário antes de efetuar o cálculo!<br><br></6>";
		}

	
		?>

		<h5><a href="index.php">Voltar para Home</a></h5>


</body>
</html>