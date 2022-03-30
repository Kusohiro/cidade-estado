<?php

    include_once "default.inc.php";
    require_once "Conexao.php";

$sigla = isset($_POST['sigla']) ? $_POST['sigla'] : "";
		
        $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    

    // Se foi enviado via POST para acao entra aqui
    $acaoE = isset($_POST['acaoE']) ? $_POST['acaoE'] : "";
    if ($acaoE == "salvar"){
			require_once ("class.estado.php");
                  $estado1 = new estado($_POST['estado'],$_POST['sigla']);
				
			if ($estado1->inserir()){
				header("location:index.php");;
			} else {echo "erro";}
		}
?>