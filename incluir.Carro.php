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
	<div class="container mt-3">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col-4" colspan="2"><h3>DADOS DO VEÍCULO</h3></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Marca: </th>
					<td><?php echo $car->GetMarca() ?></td>
				</tr>
				<tr>
					<th scope="row">Modelo: </th>
					<td><?php echo $car->GetModelo() ?></td
					</tr>
					<tr>
						<th scope="row">Descrição: </th>
						<td><?php echo $car->GetDescricao() ?></td>
					</tr>
					<tr>
						<th scope="row">Ano de Fabricação: </th>
						<td><?php echo $car->GetAnoFab() ?></td>
					</tr>
					<tr>
						<th scope="row">Ano Modelo: </th>
						<td><?php echo $car->GetAnoMod() ?></td>
					</tr>
					<tr>
						<th scope="row">Número de portas: </th>
						<td><?php echo $car->GetPortas() ?></td>
					</tr>
					<tr>
						<th scope="row">Cor: </th>
						<td><?php echo $car->GetCor() ?></td>
					</tr>
					<tr>
						<th scope="row">Km: </th>
						<td><?php echo $car->GetKm() ?></td>
					</tr>
					<tr>
						<th scope="row">Placa: </th>
						<td><?php echo $car->GetPlaca() ?></td>
					</tr>
					<tr>
						<th scope="row">Valor: </th>
						<td><?php echo 'R$ '.number_format($valor = $car->GetValor(), 2,",",".") ?></td>
					</tr>
					<tr>
						<th scope="row">Observações: </th>
						<td><?php echo $car->GetObs() ?></td>
					</tr>
					<tr>
						<th scope="row">Ativo: </th>
						<td>
							<?php
							$ativo = (isset($_POST['ativo'])) ? 'Sim' : 'Não';
							echo $ativo; ?>
						</td>
					</tr>
					<tr>
						<td colspan="2"><img src='<?php echo $car->GetFoto1()?>'/> </td>
					</tr>
				</tbody>
			</table>
		</div>