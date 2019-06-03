<?php

require_once "./dbconfig.php";
require_once "./Carro.php";

$car = new Carro( DB_STRING, DB_USER, DB_PASS);

$car->SetMarca(@$_POST['marca']);
$car->SetModelo(@$_POST['modelo']);
$car->SetDescricao(@$_POST['descricao']);
$car->SetPortas(@$_POST['portas']);
$car->SetAnoFab(@$_POST['ano_fab']);
$car->SetAnoMod(@$_POST['ano_mod']);
$car->SetCor(@$_POST['cor']);
$car->SetKm(@$_POST['km']);
$car->SetPlaca(@$_POST['placa']);
$car->SetValor(@$_POST['valor']);
$car->SetObs(@$_POST['obs']);
$car->SetAtivo(@$_POST['ativo']);
$car->SetFoto1(@$_POST['foto1']);
$car->SetFoto2(@$_POST['foto2']);
$car->SetFoto3(@$_POST['foto3']);
$car->SetFoto4(@$_POST['foto4']);

$car->Incluir();
?>
<div class="container mt-3">
	<div class="card">
		<h5 class="card-header bg-danger text-dark font-weight-bold"><?php echo $car->GetMarca().' '. $car->GetModelo() ?> </h5>
		<div class="card-body bg-dark text-danger">
			<p class="card-text">Descrição: 
				<span class="text-light"><?php echo ucwords($descri = $car->GetDescricao())?></span> </p>
				<p class="card-text">Nº Portas: 
					<span class="text-light"><?php echo $car->GetPortas()?></span></p>
					<p class="card-text">Ano: <?php echo $car->GetAnoFab().'/'.$car->GetAnoMod() ?></p>
					<p class="card-text">Valor: R$<?php echo $car->GetValor()?></p>
					<a href="./administrativo.php?menu=cadastrar">
						<button class="btnConfig btn-success float-right p-2 mb-2s">Novo Veículo</button>
					</a>
					<a href="./administrativo.php?menu=listar"" >
						<button class="btnConfig btn-secondary float-right p-2 mb-2s">Todos os carros</button>
					</a>
				</div>
			</div>
		</div>