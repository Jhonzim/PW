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
<body class="c1">
    <div class="conteiner-fluid">
        <div class="row" align="center">
				 							<div class="col">
                <h1 class="titulo">Calculo do total</h1>
            </div>
        </div>
        <div class="row" align="center">
        				<div class="col">
        								<p>Total do pedido</p>
        				</div>
        </div>
        <form method="POST" action="calculaindice.php" name="formulario">
        				<div class="form-group">
        								<div class="row margimInput">
        												<div class="col">
        																<label>Nome</label>
        																<input type="text" required class="text-upercase form-control" required autofocus name="txtnome">
        												</div>
        												<div class="col">
        																<label>Quantidade de pedidos</label>
        																<input type="text"  required class="text-upercase   form-control"required autofocus name="txtqtd">
        																<!--<small class="form-text text-muted">Informe a quantidade de produtos escolhidos</small>-->
        												</div>
        												<div class="col">
        																<label>Valor do produto</label>
        																<input type="text"  required class="text-upercase form-control" required autofocus name="txtvalor">
        																<!--<small class="form-text text-muted">Informe o valor que estava o produto na pagina do site</small>-->
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
        				</div>
        </form>
				</div>        
<script src="js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 

</body>
</html>

