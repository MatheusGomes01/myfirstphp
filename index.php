<fieldset><?
$num = 5;
$num2 = 6;

$sum = $num + $num2;

echo "PHP:".$sum."<br/>"
?>
<br/>

<script>
	var num = 5;
	var num2 = 6;

	var sum = num + num2;
	document.write("JS:"+sum);
</script>

<br/> 


<?php

$var = 6;

$name = "Aula 2 - aprendendo variaveis";
$var = "Curso de PHP -";
$var .= $name;


echo $var;
?>

<br/>
</fieldset>

<fieldset>
<?php
$title = "Usuario:";
$title1 = "Aula 3 e 4 - adicionando variaveis a tela:";
$name = "Matheus";
$sobrenome = "gomes";
$idade = 17;
$email = "tamo@gmail.com"
?>
		<h4> <?= $title1;?></h4>

	<h4> <?= $title;?></h4>

	<ul>
		<li>Nome: <?= $name." ".$sobrenome;?></li>
		<li>idade: <?= $idade;?></li>
		<li>E-mail: <?= $email;?></li>
	</ul>
	</fieldset>

	<fieldset>

		<?php
		$title2 = "Aula 6 - variaveis de contas";
		?>

		<h4><?= $title2; ?></h4>
		
		<?php



		// Concatenar
		$dado = "Matheus";
		$sobredado = "gomes";
		//echo $dado." ".$sobredado;

		// Soma
		$x = 10;
		$y = 8;
		$x++; //$x = $x + 1;
		$y+=3; //$y = $y + 3;
		//echo $x + $y;

		// Subtração

		$x=  10;
		$y = 8;
		$x--;
		$y-=3;

		//echo $x - $y;

		// divisão

		$x=  10;
		$y = 8;
	
		//echo $x / $y;

			// Multiplicação

		$x=  10;
		$y = 8;
	
		//echo $x * $y;

		// Exponencial

		$x= 2;
		$y = 2;

		//echo $x ** $y;

		//Módulo

		echo 4 % 2;

		?>
	</fieldset>

		<fieldset>

		<?php
		$title3 = "Aula 7 - Precedencia";
		?>

		<h4><?= $title3; ?></h4>
		<?php
		echo ((4+4)*2) / 4
		?>

		</fieldset>

		<fieldset>
			
			<?php
			$title4 = "Aula 8 - Condicionais"
			?>

			<h4><?= $title4; ?></h4>

			<?php

			//Calculadora

			$value1 = 10;
			$value2 = 3;
			$operador = "%";


			//teste de operação:

			if ($operador == "+"){
				echo"Soma = ".($value1 + $value2);
			}elseif ($operador == "-") {
				echo "Subtração = ". ($value1 - $value2);
			}elseif ($operador == "/") {
				echo "Divisão = ". ($value1 / $value2);
			}elseif ($operador == "*") {
				echo "Multiplicação = ". ($value1 * $value2);
			}else {
				echo "Operado não existe";

			}

			?>
		</fieldset>

	<fieldset>
	<?php 
	$title5 = "Aula 9 - Aprendendo o for" 
	?>

	<h4> <?= $title5; ?> </h4>

	<?php
	// Repeat Loop:
	// for:

	/*for($i = 0; $i<=10; $i++){
		echo "lista".$i."<br>";
	} 
	*/

	// while:
	?>

	<h4>Repita o Looping</h4>
	<h6>Usando o for</h6>
	<ul>
	<?php for($i = 0;$i<20;$i++){ ?>
	<li>Lista <?php echo $i; ?>  </li>
	<?php } ?>
		</ul>

	
	</fieldset>


