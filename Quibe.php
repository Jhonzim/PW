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
    <script type="text/javascript">
    				function mostrar(){
    								document.getElementById("cards").innerHTML="<div class='row'><div class='col cartao'><div class='card' style='width: 18rem;'> <img class='card-img-top' src='image/Card/Frito.jpg' alt='Card image cap'> <div class='card-body'> <h5 class='card-title'>Quibes fritos</h5> <p class='card-text'>Os quibes fritos sao feitos pela minha mae que faz quibe desde os 11 anos de idade, todo mundo que come aprova.</p> <a href='#' class='btn btn-primary'>Go somewhere</a> </div> </div></div><div class='col cartao'><div class='card' style='width: 18rem;'> <img class='card-img-top' src='image/Card/Assado.jpeg' alt='Card image cap'> <div class='card-body'> <h5 class='card-title'>Quibes assados</h5> <p class='card-text'>Os quibes assados vem recheados com requeijão e mussarela o que da um sabor especial para o quibe.</p> <a href='#' class='btn btn-primary'>Go somewhere</a> </div> </div></div></div><!--  -->"
    				}
    </script>
    <title>Quibes</title>
</head>
<body class="c1">
    <div class="conteiner-fluid">
	<div class="row linhaInicial">
            <div class="col menuLogin menuCalculo">
				<h1 class="titulo"><a href="atv1.php" class="linkIndex"><strong> Quitutes da Rê </strong></a></h1>
                <ul class="menu">
                    <li>
                        <?php
                            if(isset($_SESSION['nomecli'])){
					        echo ("<a href='logof.php' class='aLogin sessionLogin'>Desconectar de ". $_SESSION['nomecli']."</a>");
					        }
                        ?>
                    </li>
                    <li><a class="aLogin" href="cadastro.php">Cadastre-se aqui</a></li>
                    <li>
                        <?php
                            if(!isset($_SESSION['nomecli'])){
					        echo ("<a class='aLogin' href='login.php'>Login</a>");
					        }
                        ?></li>
                    <li>
                    <li>
                        <form method="POST" action="busca.php" class="boxPesquisa">
                            <input type="text" placeholder="Pesquisar" class="pesquisaInput" name="pesquisa">
                            <button type="submit" class="pesquisaBotao"><img  src="/image/lupa.svg" alt="Lupa" ></button>
                        </form>                
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col">
                <h1 class="titulo tituloQuibes">Quibes</h1>
            </div>
        </div>
    				<div class="row" align="center">
    								<div class="col">
    									<button type="button" class="btn btn-primary" onclick="mostrar()">Quibes assados</button> 
    									<button type="button" class="btn btn-secondary">Quibes fritos </button> 
    									<button type="button" class="btn btn-success">Compre conosco </button> 
    									<button type="button" class="btn btn-danger">Telefone</button>
    								</div>
    							</div>
    							<div class="row" id="cards">
    											
    				<!--			</div>
    							<div class="row">
    											<div class="col cartao">
    															<div class="card" style="width: 18rem;"> <img class="card-img-top" src="image/Card/Frito.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Quibes fritos</h5> <p class="card-text">Os quibes fritos sao feitos pela minha mae que faz quibe desde os 11 anos de idade, todo mundo que come aprova.</p> <a href="#" class="btn btn-primary">Go somewhere</a> </div> </div>
    											</div>
    											<div class="col cartao">
    															<div class="card" style="width: 18rem;"> <img class="card-img-top" src="image/Card/Assado.jpeg"alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Quibes assados</h5> <p class="card-text">Os quibes assados vem recheados com requeijão e mussarela o que da um sabor especial para o quibe.</p> <a href="#" class="btn btn-primary">Go somewhere</a> </div> </div>
    											</div>
    							</div>
    				</div>--->
    				    
<script src="js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 

</body>
</html>
