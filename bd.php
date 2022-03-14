<?php
 session_start();

  $cpf = $_POST['txtlogin'];
  $senha = $_POST['senha'];

  $host='localhost';
  $bd='site_pw';
  $user='root';
  $pwd='';
  
  $con = mysqli_connect($host, $user, $pwd, $bd) or die ('Impossivel abrir esta base de dados');
  $query = "SELECT * FROM cadastro WHERE cpf='".$cpf."' AND senha = '".$senha."'";
  $retorno = mysqli_query($con, $query);
  $linhas = mysqli_num_rows($retorno);

    if($linhas > 0){
      $al=mysqli_fetch_assoc($retorno);
      do{
      $_SESSION['idcli']=$al['id'];
      $_SESSION['nomecli']=$al['nome'];
      }while($al=mysqli_fetch_assoc($return));
    }
    else{
      echo('<script>alert("Usuario ou senha -- inválidos")</script>');
    }
    echo("<script>window.location='http://localhost/atv1.php'</script>")
?>
  