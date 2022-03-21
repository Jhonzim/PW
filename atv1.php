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
        <div class="row linhaInicial">
            <div class="col menuLogin">
                <h1 class="titulo"><strong> Quitutes da Rê </strong></h1>
                <ul class="menu">
                    <li><a class="aLogin" href="cadastro.php">Cadastre-se aqui</a></li>
                    <li><a class="aLogin" href="login.php">Login</a></li>
                    <li>
                        <form method="GET" action="busca.php" class="boxPesquisa">
                            <input type="text" placeholder="Pesquisar" class="pesquisaInput">
                            <button type="submit" class="pesquisaBotao"><img  src="/image/lupa.svg" alt="Lupa" ></button>
                        </div>                
                    </li>
                </ul>
            </div>
        </div>
        <div class="row ulIndex">
         <ul class="linksIndex">
             <li><a class="links" href="calculo.php">TABULE</a></li>
             <li><a class="links" href="bolosal.html"> TORTAS </a></li>
             <li><a class="links" href="Quibe.html"> QUIBES </a></li>
             <li><a class="links" href="minipz.html"> MINI PIZZAS </a></li>
         </ul>
        </div>
        <div class="row ">
            <div class="col"></div>
            <div class="col">
                <div id="carouselsite" class="carousel slide Carouselclass" data-ride="carousel">
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
                                <h3>TABULE</h3>
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
                            <img src="./image/kibe_frito.jpg" class="img-fluid dblock quibe">
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
            <div class="rodape">
                <h2>Entre em contato</h2>
                <ul>
                    <li>Número de contato</li>
                    <li>Endereço da empresa</li>
                    <li>Instagram: <a href="#">@instagram</a></li>
                </ul>
            </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 

</body>
</html>
