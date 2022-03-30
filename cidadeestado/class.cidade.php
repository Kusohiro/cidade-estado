<?php
class cidade{
	//atributos
	private $nome;
	private $estado;
	private $sigla;
	
	//métodos
	public function __construct($nome,$estado,$sigla){
		$this->nome = $nome;
		$this->estado = $estado;
		 		require_once "conexao.php";
		    $sql = "SELECT * FROM estado";
$pdo = Conexao::getInstance();
$consultas = $pdo->query($sql);
		foreach($consultas->fetchAll() as $linha){
    		if($linha['id'] == 1) $this->sigla = "SC";
			elseif($linha['id'] == 2) $this->sigla = "RS";
			elseif($linha['id'] == 3) $this->sigla = "PR";
		}
	}
		public function __toString(){
		$str = "nome: $this->nome <br> estado: $this->estado <br> sigla: $this->sigla";
		return $str;
		}
	function inserir(){
                  $pdo = Conexao::getInstance();
        $stmt = $pdo->prepare("INSERT INTO `cidade/estado`.`cidade` (`NOME`, `id_estado`) VALUES('$this->nome', '$this->estado')");
        return $stmt->execute();
	}
	function excluir(){
	     $pdo = Conexao::getInstance();
        $stmt = $pdo->prepare("DELETE from cidade/estado.cidade WHERE NOME = '$this->nome'");
        $stmt->execute();}
}
?>