<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;500&display=swap" rel="stylesheet">
    
    <style type="text/css">
        body{ 
            font: 14px sans-serif; text-align: center; font-family: 'Roboto Slab', serif; background-color: #b5c5ca;
        }
    </style>
</head>
<body>
<div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        <h1>Bem vindo !!!</h1>
        
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
       
        <a href="cadastros.txt" class="btn btn-danger">Cadastros</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>

       
    </p>
</body>
</html>