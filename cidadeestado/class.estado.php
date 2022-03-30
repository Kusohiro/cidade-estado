<?php
class estado{
	//atributos
	private $estado;
	private $sigla;
	
	//métodos
	public function __construct($estado,$sigla){
		$this->setSigla($sigla);
		$this->setEstado($estado);
	}
		public function __toString(){
		$str = "estado: ".getEstado()." <br> sigla: ".getSigla();
		return $str;
		}
	function inserir(){
                  $pdo = Conexao::getInstance();
        $stmt = $pdo->prepare("INSERT INTO `cidade/estado`.`estado` (`estado`, `sigla`) VALUES('$this->estado', '$this->sigla')");
        return $stmt->execute();
	}
	public function getEstado(){
		if ($this->estado != "")
			return $this->estado;
		else
			return "DESCONHECIDO";
	}
	
	public function setEstado($newname){
		$this->estado=$newname;}
	
	public function getSigla(){
		if ($this->sigla != "")
			return $this->sigla;
		else
			return "DESCONHECIDO";
	}
	
	public function setSigla($SG){
		$this->sigla=$SG;}
}
?>