<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
				<meta charset="UTF-8">
		<meta name="description" content="Alimentos salgados">
		<meta name="keywords" content="Quitutes, alimentos, guloseimas, quibes">
		<meta name="viweport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./pagina.css">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<title>Quitutes da Rê</title>
	</head>
	<body class="c1 calculo">
		<div class="conteiner-fluid">
			<div class="row linhaInicial">
				<div class="col menuLogin menuCalculo">
					<h1 class="titulo"><a href="atv1.php" class="linkIndex"><strong> Quitutes da Rê </strong></a></h1>
					<ul class="menu">
						<li><a class="aLogin" href="cadastro.php">Cadastre-se aqui</a></li>
						<li><a class="aLogin" href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
			<div class="row linhaTituloCalculo">
				<p class="titulo tituloCalculo">Preencha com os valores solicitados</p>
			</div>
			<form method="POST" action="calculaindice.php" name="formulario" >
				<section class=" formularioCalculo">
					<div class="linhaCalculo">
						<div class="col areaInput">
							<label>Nome</label>
							<input type="text" required class="text-upercase form-control" required autofocus name="txtnome">
						</div>
						<div class="col areaInput">
							<label>Quantidade de pedidos</label>
							<input type="text"  required class="text-upercase   form-control"required autofocus name="txtqtd">
						</div>
						<div class="col areaInput">
							<label>Valor do produto</label>
							<input type="text"  required class="text-upercase form-control" required autofocus name="txtvalor">
						</div>
					</div>
					<div class="row ">
						<div class="col botao">
							<input type="submit" class="btn btn-primary" href="calculaindice.php" value="Calcular">
						</div>
					</div>
					<?php
					if(isset($_SESSION['historico'])){
						echo $_SESSION['historico'];
					}
					?>
				</section>
			</form>
		</div>        
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="/js/popper.min.js"></script>
		<script src="./js/bootstrap.min.js"></script> 

	</body>
</html>

