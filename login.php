<?php
 //start_session();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pagina.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Cadastro</title>
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
                        <form autocomplete="off"method="POST" action="busca.php" class="boxPesquisa">
                            <input type="text" placeholder="Pesquisar" class="pesquisaInput" name="pesquisa">
                            <button type="submit" class="pesquisaBotao"><img  src="/image/lupa.svg" alt="Lupa" ></button>
                        </form>                
                    </li>
				</ul>
			</div>
		</div>
        <div class="row">
            <div class="col subtituloLogin">
                <p class="titulo tituloLogin">Faça Login</p>
                <p class="">Preencha com seus dados</p>
            </div>
        </div>
    </div>
    <form action="bd.php" method="POST" name='insert'>
        <div class="formLogin">
            <div class="row margimInput">
                <div class="row ">
                        <div class="col bginput topRadius" style = "padding: 15px;">
                            <label for="txtlogin">Coloque seu CPF</label>
                            <input type="text" maxlength="20" required size='10' name="txtlogin"class="form-control" >
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col bginput" style = "padding: 15px;">
                            <label for="senha">Coloque seu CPF</label>
                            <input type="text" maxlength="8" required size='10' name="senha"class="form-control" >
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col botaoLogin">
                <input type="submit" name="imputSend" class="botaoSubmit"value="Login">
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>