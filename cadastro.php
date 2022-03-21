<?php
 session_start()
 
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
                    <li>
                        <?php
                            if(!isset($_SESSION['nomecli'])){
					        echo ("<a class='aLogin' href='login.php'>Login</a>");
					        }
                        ?></li>
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
            <div class="subtituloLogin">
                <p class="tituloLogin titulo">Cadastre-se Aqui</p>
                <p class="">Preencha com seus dados</ps>
            </div>
        </div>
    </div>
    <form autocomplete="off"action="insert.php" method="POST" name='insert'>
        <div class="formCadastro">
            <div class="inputCadastro">
                <div class="row">                       
                    <div class="col bginput topRadius" style = "padding: 15px;">
                        <label>Coloque seu nome</label>
                        <input type="text" maxlength="20" required size='10' name="imputName"class="form-control" >
                    </div>                        
                </div>
                <div class="row ">                       
                    <div class="col bginput" style = "padding: 15px;">
                        <label>Coloque seu CPF</label>
                        <input type="text" maxlength="20" required size='10' name="imputCpf"class="form-control" >
                    </div>                       
                </div>
                <div class="row ">                       
                    <div class="col bginput bottomRadius" style = "padding: 15px;">
                        <label>Digite sua senha</label>
                        <input type="text" maxlength="8" required size='20' name="imputSenha"class="form-control" placeholder="8 digitos no máximo" >
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="botaoLogin">
                <input type="submit" name="imputSend" class="botaoSubmit"value="Cadastrar">
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>