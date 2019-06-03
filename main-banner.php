<?php 
require_once 'dbconfig.php';
require_once 'Carro.php';

$car = new Carro(DB_STRING, DB_USER, DB_PASS);

$quant = 2;
$result = $car->ConsultarLimit($quant);

while ($retorno = $result->fetchObject()) { ?>


	<div class="jumbotron text-center" style="background-image: url('<?php echo $retorno->foto1?>'); 
	background-size: cover;
	background-position: 70%;">
	<div class="container">
		<h1 class="display-4 text-danger font-weight-bold"> <?php echo strtoupper($marca = $retorno->marca).' '.
		ucwords($modelo = $retorno->modelo) ?> </h1>
		<div class="banner2">
			<a href="#">
				<div class="price"><?php echo '$ '.number_format($vlcar = $retorno->valor, 0,",","."); ?></div>
			</a>
		</div>
	</div>
</div>
<?php

}


?>