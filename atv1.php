<?php
 session_start();
 	if (isset($_SESSION['historico'])){
 	    unset($_SESSION['historico']);
 	    }
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
        <form action="bd.php" method="POST" name="login">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="titulo">Quitutes da Rê</h1>
            </div>
            <div class="col">
                    <div class="col">
                        <?php
                    if(isset($_SESSION['nomecli'])){
					echo ("<label>Login Bem sucedido! &nbsp  </label>".$_SESSION['nomecli']);
					}
                    ?>
                    </div>
                <div class="col" id="telaLogin">
                    <small>Usuario:</small>   
                    <input type="text" name="txtlogin" maxlength="20" required size="12">
                    <input type="submit" class="" value="Sair" style = "width:48px;height:30px">
                    
                </div>
                <div class="col">
                    <small>Senha : &nbsp</small>
                    <input type="text" name="senha" maxlength="20" required size='12'>
                    <input type="submit" class="" value="Login" style = "text-align: center;">

                </div>
                <div class="col-6">
                    <p class="novo">Novo?<a href="cadastro.php" class="links a-login">Cadastre-se.</p>
                </div> 
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col">
                <a class="links" href="calculo.php"><p class="plink"> TABULE</p></a>
            </div>
            <div class="col">
                <a class="links" href="bolosal.html"><p class="plink"> TORTAS SALGADAS </p></a>
            </div>
            <div class="col">
                <a class="links" href="Quibe.html"><p class="plink"> QUIBES </p></a>
            </div>
            <div class="col">
                <a class="links" href="minipz.html"><p class="plink"> MINI PIZZAS </p></a>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div id="carouselsite" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators"> <!--os LIs não funcionam nao sei porque quando inspeciono aparece que estão ligados mais e com esca de (0x0) tentei tirar o bacground mais nao funcionou então deixei  -->
                        <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselsite" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselsite" data-slide-to="2" class="active"></li>
                        <li data-target="#carouselsite" data-slide-to="3" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/tabule.PNG" class="img-fluid dblock">
                            <div class="carousel-caption bg">
                                <h3><a href="calculo.php" class="item linkCar">TABULE</a></h3>
                                <p class="item">Nossa deliciosa salada com quibe cru</p>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <img src="./image/mini-pizza.jpg" class="img-fluid dblock">
                            <div class="carousel-caption bg">
                                <h3 class="item">MINI PIZZA</h3>
                                <p class="item">Venha descobrir o sabor das nossas mini pizzas</p>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <img src="./image/torta salgada.jpg " class="img-fluid dblock">
                            <div class="carousel-caption bg">
                                <h3 class="item">Tortas Salgadas</h3>
                                <p class="item">Venha experimentar nossas tortas salgadas </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./image/kibe_frito.jpg" class="img-fluid dblock">
                            <div class="carousel-caption bg">
                                <h3 class="item">QUIBES</h3>
                                <p class="item">Nossos quibes são especiais </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bga"href="#carouselsite" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next bga"href="#carouselsite" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only"></span>
                    </a>             
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 

</body>
</html>
