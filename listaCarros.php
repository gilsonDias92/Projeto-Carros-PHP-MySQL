<?php
require_once "./dbconfig.php";
require_once "./Carro.php"; 

$car = new Carro( DB_STRING, DB_USER, DB_PASS);

// Listando todos os itens do banco na mesma página SEM PAGINAÇÃO
$resultado = $car->Listar();

// testando se dentro da variável foi encontrado pelo menos 1 registro
// ..se o método Listar() retornar 0 o isset() vai retornar FALSE
?>

<div class="container mt-3"> 

    <?php
    $quant = $car->Contar();

    $delete = @$_GET['delete'];
    if (isset($delete))
    {
        $car->Delete($delete);
    }

    if ($car->Contar() > 0) 
    { 
    //texto no plural ou singular
        $prodCad = ($quant > 1) ? 'carros cadastrados' : 'carro cadastrado';

        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="container">
        <strong>'.$quant.' '.$prodCad.'!
        </strong> Confira a listagem abaixo.</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        ?>
<!-- o cabeçalho da tabela está dentro do IF pq caso a consulta não retorne
        nenhum dado do banco, a tabela não será exibida, ao invés de uma 
        tabela vazia ou um cabeçalho sem tabela, uma mensagem será mostrada
        no else mais abaixo...  -->
        <table class="table table-striped table-dark table-car">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano Fab</th>
                    <th scope="col">Ano Modelo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Inclusão</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php

                while ($retorno = $resultado->fetchObject()) 
            // fetchObjetc() -> busca a próxima linha e retorna como um objeto
            // When an object is fetched, its properties are assigned from..
            // ..respective column values, and afterwards its constructor is invoked.
                    {?>
                        <tr>
                            <th scope="row"><?php echo $retorno->carro_id; ?></th>
                            <td><?php echo strtoupper($strMarca = $retorno->marca); ?></td>
                            <td><?php echo ucwords($strModelo = $retorno->modelo); ?></td>
                            <td><?php echo $retorno->ano_fab; ?></td>
                            <td><?php echo $retorno->ano_fab; ?></td>
                            <td><?php echo $retorno->placa; ?></td>
                            <td><?php echo 'R$ '.number_format($vlcar = $retorno->valor, 2,",","."); ?></td>
                            <td><?php echo $retorno->dt_inclusao; ?></td>
                            <td>
                                <!-- inserir o ?menu=lista para se manter na mesma página após a exclusão  -->
                                <a href='./administrativo.php?menu=listar&delete=<?php echo $retorno->carro_id ?>'>
                                    <i class="fas fa-trash-alt text-light" alt="Delete"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
            } // fim do while
            ?>
        </tbody>
    </table>
    <div class="divBtn">
        <a href="./administrativo.php?menu=cadastrar" >
            <button class="btnConfig btn-success float-right p-2 mb-2s">Novo Veículo</button>
        </a>
    </div>

    <?php

    } // fim do if
    else {
        echo '<div class="jumbotron text-center">
        <i class="fas fa-4x fa-exclamation-triangle"></i>
        <h1 class="display-4 font-weight-bold align-middle">'.strtoupper("Nenhum Veículo").'</h1>
        <p class="lead">Você não tem nenhum veículo cadastrado no seu banco de dados.</p>
        <hr class="my-4">
        <p class="lead">Clique no botão abaixo para cadastrar um veículo.</p>
        <a class="btn btn-success btn-lg" href="./index.php?menu=cadastra">
        <i class="fas fa-plus"></i> Adicionar Produto</a>
        </div>';
    }

    ?>
</div>