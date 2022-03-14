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
        <div class="row">
            <div class="col">
                <h1>Cadastre-se Aqui</h1>
                <p class="botao">Preencha com seus dados</ps>
            </div>
        </div>
    </div>
    <form action="insert.php" method="POST" name='insert'></form>
    <div class="form-group">
        <div class="row margimInput">
            <div class="row ">
                <label>Coloque seu nome</label>
                <input type="text" maxlength="20" required size='30' name="imputName"class="form-control" >
            </div>
            <div class="row">
                <label>Coloque seu CPF</label>
                <input type="text" maxlength="20" required size='30' name="imputCpf"class="form-control" >
            </div>
            <div class="row">
                <label>Digite sua senha</label>
                <input type="text" maxlength="20" required size='30' name="imputSenha"class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col botao">
            <input type="submit" name="imputSend" class="btn btn-primary"value="Cadastrar">
            </div>
        </div>
    </div>
    
</body>
</html>