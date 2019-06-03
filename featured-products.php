<?php 

$quant = 8;
$result = $car->ConsultarLimit($quant);

while ($retorno = $result->fetchObject()) {
	$x = 1;

	//duas linhas de 4 colunas, quando terminar de montar a quarta, começa outra linha x==5
	if ($x == 1 || $x == 5 )
	{
		echo
		'<div class="section group">';
	}

	echo '
	<div class="col_1_of_4 span_1_of_4">
	<img src="'. $retorno->foto1 .'" alt="" />
	<div class="grid_desc">
	<p class="title">'.strtoupper($marca = $retorno->marca).' '.
	ucwords($modelo = $retorno->modelo).'</p>
	<p class="title1">'.$retorno->ano_fab.'/'.$retorno->ano_mod.'</p>
	<p class="title1">'.ucwords($descri = $retorno->descricao).'</p>
	<div class="price1" style="height: 19px;">
	<span class="reducedfrom">R$ ' .number_format($vlcar = $retorno->valor, 2,",",".").'</span>
	<span class="actual"> R$ '.number_format($vlcar + 8000, 2,",",".").'</span>
	</div>
	</div>
	<div class="Details">
	<a href="./" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
	<span></span>
	</a>
	</div>
	</div>';

	if ($x == 4 || $x == 8)
	{
		echo 
		'<div class="clear"></div>
		</div>';
	}
	$x++;
}

?>