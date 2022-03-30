<?php

    include_once "default.inc.php";
    require_once "Conexao.php";

$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
		
        $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
    

    // Se foi enviado via POST para acao entra aqui
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    if ($acao == "salvar"){
			require_once ("class.cidade.php");
                  $cidade1 = new cidade($_POST['nome'],$_POST['estado'],'indefinida');
				
			if ($cidade1->inserir()){
				header("location:index.php");;
			} else {echo "erro";}
		}
  $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == "excluir"){
		require_once ("class.cidade.php");
        $cidade1 = new cidade($nome,'indefinida','indafinido');
       if ($cidade1->excluir()){
				header("location:index.php");;
			} else {echo "erro";}
    }
?>