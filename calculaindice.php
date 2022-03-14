<?php
				session_start();


				// recebendo dados provinientes da pagina calculo			
				$nome=$_POST["txtnome"];
				$qtd=$_POST["txtqtd"];
				$valor=$_POST["txtvalor"]	$total=($qtd * $valor);
				
				if(!isset($_SESSION['historico'])){
					$_SESSION['historico']="";
				}else{
					$_SESSION['historico'] .= $nome . ",  Total = " . $total . "<br>";
				}
				
				//bonus caso o cliente compre mais de 10  ele recebera 10% de desconto como nao estava conseguindo testar nao deu pra saber se fiz certo
				
			
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
        		<p>Total do pedido <br>
        		<?php
				if ($qtd > 10){
					$total=$total-($total*0.1);
					echo "Você recebeu um desconto de 10% aproveite<br>";
										
				}
        			echo "O seu total é R$ $total <br> ";
										 
        		?>
        		</p>
        	</div>
        </div>
    </div>
        <script src="js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script> 

</body>
</html>
