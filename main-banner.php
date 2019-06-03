<?php 
require_once 'dbconfig.php';
require_once 'Carro.php';

$car = new Carro(DB_STRING, DB_USER, DB_PASS);

$quant = 2;
$result = $car->ConsultarLimit($quant);

while ($retorno = $result->fetchObject()) { ?>
	<div class="main">
		<div class="content-box text-center font-weight-bold" style="background-image: url('<?php echo $retorno->foto1?>'); 
	background-size: cover;
	background-position: 70%;">
				<span class="text-danger bg-dark" style="display: block; width: 100%;"> <?php echo strtoupper($marca = $retorno->marca) .' '. ucwords($modelo = $retorno->modelo).' - '. $retorno->ano_fab.'/'. $retorno->ano_mod ?> </span>
			<div class="wrap">
				<div class="banner2">
					<a href="#">
						<div class="price"> <?php echo '$ '.number_format($vlcar = $retorno->valor, 0,",","."); ?> </div>
					</a>
				</div>
			</div>
		</div>
	</div>



<?php

}
//

?>