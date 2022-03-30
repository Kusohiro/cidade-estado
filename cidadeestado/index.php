<!doctype html>
<html>
	<?php require_once "acao.php"; 
?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
<title>cadastrar cidade</title>
</head>
<body>
	<div class="p-3 mb-2 bg-dark text-white">
	<form method="post" action="acao.php">
	cidade: <input class="form-control" name="nome" id="nome" type="text">
	estado: <select class="form-select" name="estado" id="estado">
		<option value="">selecione</option>
	<?php 
		require_once "conexao.php";
		    $sql = "SELECT * FROM estado";
$pdo = Conexao::getInstance();
$consulta = $pdo->query($sql);
		foreach($consulta->fetchAll() as $linha){
    		echo "<option value={$linha['id']}>{$linha['estado']}</option>";
		}
		?>
		</select>
		<br>
		<div class="badge bg-primary text-wrap" style="width: 6rem; height: 2rem">
 <p class="text-info bg-dark"><a class="text-decoration-none" href="indexE.php">adcionar estado</a></p>
</div>
		 <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
	</form>
	
	  <br>
    <table <table class="table table-dark table-striped">
       <tr><th>cidade</th>
        <th>estado</th> 
        <th>sigla</th>
		           <th>excluir</th> 

    </tr>
    <?php 
    $pdo = Conexao::getInstance();
    $consulta = $pdo->query("SELECT NOME, estado, sigla FROM  `cidade/estado`.cidade,  `cidade/estado`.estado
	WHERE estado.id = cidade.id_estado");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {   
        ?>
        <tr><td><?php echo $linha['NOME'];?></td>
            <td><?php echo $linha['estado'];?></td>
			<td><?php echo $linha['sigla'];?></td>
			<td><a href="acao.php?acao=excluir&nome=<?php echo $linha['NOME'];?>"><img class="icon" src="img/delete.png" alt=""></a></td>
        </tr>
    <?php } ?>       
		</table>
		<br><br><br><br><br><br><br><br><br>		</div>	
	<div class="p-3 mb-2 bg-info text-dark"><br> <center>João Vitor Oliveira de Souza</center><br></div>
</body>
</html>