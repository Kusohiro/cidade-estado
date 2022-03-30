	<!doctype html>
<html>
	<?php require_once "acaoE.php"; 
?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
<title>cadastrar estado</title>
</head>
<body>
	<div class="p-3 mb-2 bg-dark text-white">
	<form method="post" action="acaoE.php">
	estado: <input name="estado" id="estado" type="text">
	sigla: <input name="sigla" id="sigla" type="text">
		<div class="badge bg-primary text-wrap" style="width: 6rem; height: 2rem">
 <p class="text-info bg-dark"><a class="text-decoration-none" href="index.php">adcionar cidade</a></p>
</div>
		 <button type="submit" name="acaoE" id="acaoE" value="salvar">Salvar</button>
	</form>
		<img src="https://www.gov.br/cgu/pt-br/governo-aberto/time-brasil/imagens/mapa.png" alt="mapa brasil" width="450">
				</div>	
	<div class="p-3 mb-2 bg-info text-dark"><br> <center>João Vitor Oliveira de Souza</center><br></div>
</body>
</html>