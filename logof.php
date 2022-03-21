<?php
    session_start();
    if(isset($_SESSION['nomecli'])){
      unset($_SESSION['nomecli']);  
    }
    echo("<script>window.location='http://localhost/atv1.php';</script>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
</body>
</html>