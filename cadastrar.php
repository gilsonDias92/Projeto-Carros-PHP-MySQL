<div class="container bg-dark text-danger mt-3">
    <form action="./administrativo.php?menu=incluir" method="POST">
        <div class="form-group row text-center">
            <h2 class="font-weight-bold m-3">Cadastro de Veículo</h2>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Marca</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder=" Marca do Carro" required name="marca">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Modelo</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="Modelo do Carro" required name="modelo">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold ">Descrição</label>
            <div class="col-sm-10">
                <textarea type="" class="form-control" id="" placeholder="Digite uma descrição" required name="descricao"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold ">Portas</label>
            <div class="col-sm-10">
                <select class="form-control" id="sel1" placeholder="N* de Portas" required name="portas">
                    <option>2</option>
                    <option>4</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Ano de Fabricação</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="" placeholder="Ano do Carro" required name="ano_fab">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Ano Modelo</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="" placeholder="modelo do Carro" required name="ano_mod">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Cor</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="Cor do carro" required name="cor">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Km</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="" placeholder="N* Km Rodados" required name="km">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Placa</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="N*Placa" required
                name="placa"> 
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Valor</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="" placeholder="Preço" required name="valor">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold">Observação</label>
            <div class="col-sm-10">
                <textarea type="" class="form-control" id="" placeholder="Digite alguma observação" required name="obs"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Url Imagem 1 :</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="../Imagens/carro1.jpg" required name="foto1">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Url Imagem 2 :</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="../Imagens/carro2.jpg" required name="foto2">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Url Imagem 3 :</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="../Imagens/carro3.jpg" required name="foto3">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label font-weight-bold" >Url Imagem 4 :</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="" placeholder="../Imagens/carro4.jpg" required name="foto4">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <label class="form-check-label"><input type="checkbox" name="ativo"> <strong>Ativo</strong></label>
            </div>
        </div>
        <input style="" class="btnConfig btn-success p-2 mb-2" type="submit" value="Cadastrar">
    </form>

    <a href="./administrativo.php?menu=listar" ><button class="btnConfig btn-danger p-2 mb-2s">Retornar&nbsp</button></a>
</div>