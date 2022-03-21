<?php
    session_start();
    $nome= $_POST['pesquisa'];

    $host='localhost';
    $bd='site_pw';
    $user='root';
    $pwd='';

    $con = mysqli_connect($host, $user, $pwd, $bd) or die ('Impossivel abrir esta base de dados');

    $query = "SELECT * FROM cadastro where nome LIKE '%".$nome."%' OR cpf LIKE '%".$nome."%' OR id LIKE '%".$nome."%'";
    $query2 = "SELECT * FROM cadastro";
    $retorno= mysqli_query($con, $query);
    $retorno2 = mysqli_query($con, $query2);
    $linhas = mysqli_num_rows($retorno);
    $al2 = mysqli_fetch_assoc($retorno2);
    $al=mysqli_fetch_assoc($retorno);

    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="pagina.css">
    <title>Document</title>
</head>
<body>
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
                <li><a class="aLogin" href="login.php">Login</a></li>
                <li>
                    <form method="POST" action="busca.php" class="boxPesquisa">
                        <input type="text" placeholder="Pesquisar" class="pesquisaInput" name="pesquisa">
                        <button type="submit" class="pesquisaBotao"><img  src="/image/lupa.svg" alt="Lupa" ></button>
                    </form>                
                </li>
            </ul>
        </div>
    </div>
    <h3 class="subtituloBusca">Estes são os resultados da sua pesquisa por "<?php echo($nome)?>"</h3>
    <div class="boxTabela">       
        <div class="tabelaBusca">
            <ul>
                <?php
                    if($nome == ""){
                        echo("<li>Não foram encontrados resultados</li>");
                    }
                    elseif($linhas > 0){
                        echo("<li><strong>ID</strong> &nbsp &nbsp &nbsp <strong>NOME</strong> &nbsp &nbsp &nbsp <strong>CPF</strong></li>");
                        do{
                            echo("<li class='itemTabela'>" . $al['id'] . "&nbsp &nbsp &nbsp &nbsp" . $al['nome'] . "&nbsp &nbsp" . $al['cpf'] ."</li>" ."<br>");
                        }while($al=mysqli_fetch_assoc($retorno));
                    }
                    else{
                        echo('<script>alert("Palavra não encontrada")</script>');
                    }
                ?>
            </ul>
        </div>
    </div>
    <footer class="rodape">
        <h2>Entre em contato</h2>
        <ul>
            <li>Número de contato</li>
            <li>Endereço da empresa</li>
            <li>Instagram: <a href="#">@instagram</a></li>
        </ul>
    </footer>
</body>
</html>