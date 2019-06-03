²<?php 

/*
  `carro_id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `portas` int(11) NOT NULL,
  `ano_fab` int(11) NOT NULL,
  `ano_mod` int(11) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `km` double NOT NULL,
  `placa` VARCHAR(8) NOT NULL,
  `valor` DECIMAL(3,2) NOT NULL,
  `obs` TEXT NOT NULL,
  `dt_inclusao` date NOT NULL,
  `ativo` BOOLEAN NOT NULL,
  `foto1` VARCHAR(15) NOT NULL,
  `foto2` VARCHAR(15),
  `foto3` VARCHAR(15),
  `foto4` VARCHAR(15));

*/

  class Carro extends PDO
  {
  	private $carro_id, $marca, $modelo, $descricao, $portas, $ano_fab, $ano_mod, $cor, $km, $placa, $valor, $obs, $dt_inclusao, $ativo, $foto1, $foto2, $foto3, $foto4; 


  	public function GetCarroId(){
  		return $this->carro_id;
  	}
  	public function SetCarroId($value){
  		$this->carro_id = $value;
  	}

  	public function GetMarca(){
  		return $this->marca;
  	}
  	public function SetMarca($value){
  		$this->marca = $value;
  	}

  	public function GetModelo(){
  		return $this->modelo;
  	}
  	public function SetModelo($value){
  		$this->modelo = $value;
  	}

  	public function GetDescricao(){
  		return $this->descricao;
  	}
  	public function SetDescricao($value){
  		$this->descricao = $value;
  	}

  	public function GetPortas(){
  		return $this->portas;
  	}
  	public function SetPortas($value){
  		$this->portas = $value;
  	}

  	public function GetAnoFab(){
  		return $this->ano_fab;
  	}
  	public function SetAnoFab($value){
  		$this->ano_fab = $value;
  	}

  	public function GetAnoMod(){
  		return $this->ano_mod;
  	}
  	public function SetAnoMod($value){
  		$this->ano_mod = $value;
  	}

  	public function GetCor(){
  		return $this->cor;
  	}
  	public function SetCor($value){
  		$this->cor = $value;
  	}

  	public function GetKm(){
  		return $this->km;
  	}
  	public function SetKm($value){
  		$this->km = $value;
  	}

  	public function GetPlaca(){
  		return $this->placa;
  	}
  	public function SetPlaca($value){
  		$this->placa = $value;
  	}

  	public function GetValor(){
  		return $this->valor;
  	}
  	public function SetValor($value){
  		$this->valor = $value;
  	}

  	public function GetObs(){
  		return $this->obs;
  	}
  	public function SetObs($value){
  		$this->obs = $value;
  	}

  	public function GetDtInclusao(){
  		return $this->dt_inclusao;
  	}
  	public function SetDtInclusao($value){

  		$this->dt_inclusao = $value;
  	}

  	public function GetAtivo(){
  		return $this->ativo;
  	}
  	public function SetAtivo($value){
  		$this->ativo = $value;
  	}

  	public function GetFoto1(){
  		return $this->foto1;
  	}
  	public function SetFoto1($value){
  		$this->foto1 = $value;
  	}

  	public function GetFoto2(){
  		return $this->foto2;
  	}
  	public function SetFoto2($value){
  		$this->foto2 = $value;
  	}

  	public function GetFoto3(){
  		return $this->foto3;
  	}
  	public function SetFoto3($value){
  		$this->foto3 = $value;
  	}

  	public function GetFoto4(){
  		return $this->foto4;
  	}
  	public function SetFoto4($value){
  		$this->foto4 = $value;
  	}

  	public function Incluir(){
  		$data = [

  			'marca'     	=> $this->GetMarca(),
  			'modelo'    	=> $this->GetModelo(),
  			'descricao' 	=> $this->GetDescricao(),
  			'portas'    	=> $this->GetPortas(),
  			'ano_fab'   	=> $this->GetAnoFab(),
  			'ano_mod'		  => $this->GetAnoMod(),
  			'cor'			    => $this->GetCor(),
  			'km'			    => $this->GetKm(),
  			'placa'			  => $this->GetPlaca(),
  			'valor'			  => $this->GetValor(),
  			'obs'			    => $this->GetObs(),
  			'ativo'			  => $this->GetAtivo(),
  			'foto1'			  => $this->GetFoto1(),
  			'foto2'			  => $this->GetFoto2(),
  			'foto3'			  => $this->GetFoto3(),
  			'foto4'			  => $this->GetFoto4()
  		];


  		$sql = "
  		INSERT INTO veiculos(marca, modelo, descricao, portas, ano_fab, ano_mod, cor, km, placa, valor, obs, ativo, foto1, foto2, foto3, foto4)
  		VALUES (:marca, :modelo, :descricao, :portas, :ano_fab, :ano_mod, :cor, :km, :placa, :valor, :obs, :ativo, :foto1, :foto2, :foto3, :foto4)";

  		$stmt= $this->prepare($sql);
  		$resp = $stmt->execute($data);
  		return $resp;
      // a data de inclusão será gerada automaticamente
  	}

    // LISTAR carros na Home Page
    public function ConsultarLimit($quant)
    {
      $sql = "SELECT * FROM veiculos ORDER BY valor DESC LIMIT ".$quant;
      return $this->query($sql);
    }


  //   public function Consultar($id)
  //   {
  //     $sql = "SELECT * FROM veiculos where carro_id=".$id;
  //     if($base = $this->query($sql))
  //     {
  //      while($row = $base->fetchObject())
  //      {
  //       $this->SetCarroId($row->carro_id);
  //       $this->SetMarca($row->marca);
  //       $this->SetModelo($row->modelo);
  //       $this->SetDescricao($row->descricao);
  //       $this->SetPortas($row->portas);
  //       $this->SetAnoFab($row->ano_fab);
  //       $this->SetAnoMod($row->ano_mod);
  //       $this->SetCor($row->cor);
  //       $this->SetKm($row->km);
  //       $this->SetPlaca($row->placa);
  //       $this->SetValor($row->valor);
  //       $this->SetObs($row->obs);
  //       $this->SetDtInclusao($row->dt_inclusao);
  //       $this->SetAtivo($row->ativo);
  //       $this->SetFoto1($row->foto1);
  //       $this->SetFoto2($row->foto2);
  //       $this->SetFoto3($row->foto3);
  //       $this->SetFoto4($row->foto4);
  //       return true;
  //     }
  //   }
  //   return false;
  // }

  public function Delete($id)
  {
    $sql = "DELETE FROM veiculos WHERE carro_id=".$id;
    $this->query($sql);
  }

  public function Contar()
  {
    $resp = $this->prepare("SELECT COUNT(*) AS total FROM veiculos");
    $resp->execute();
    $total = $resp->fetch(PDO::FETCH_OBJ);
    return $total->total;
  }

  public function Listar()
  {
    $sql = "SELECT * FROM veiculos ORDER BY carro_id";
    return $this->query($sql);
  }

}

?>