<?php 
 //start_session();
 $senha = $_POST['imputSenha'];
 $nome = $_POST['imputName'];
 $cpf = $_POST['imputCpf'];

 $host='localhost';
 $bd='site_pw';
 $user='root';
 $pwd='';
 
 $con = mysqli_connect($host, $user, $pwd, $bd) or die ('Impossivel abrir esta base de dados');
 $query= "INSERT INTO cadastro values ('default','".$cpf."', '".$nome."','".$senha."')";
 $retorno = mysqli_query($con, $query);
 echo("<script>window.location='http://localhost/atv1.php'</script>");
?>