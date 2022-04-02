<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'Alexandre' and $_POST['password'] == '54321'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Alexandre Garcia';
         header("location: home.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;500&display=swap" rel="stylesheet">
    <!-- lib de icons -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <style type="text/css">
        
        body{ 
            font: 14px sans-serif; font-family: 'Roboto Slab', serif; background-color: #b5c5ca;   }
        .login { 
            width: 350px; padding: 20px; }
        .login h1{
            color:#227087; border-radius: white;
        }
        .login h4{color: red; padding: 0px 30px;

        }
        .form-group input{
            box-shadow: 10px 5px #999999;
        }
        .lnr-eye {
            position: absolute;
            top: 49%;
            right: 77%;
            cursor: pointer;
}
        
    </style>

    <title>login</title>
</head>
<body>
    <div class="login">
        <h1><b>Fatec</b></h1>
        <h4><b>Araras</b></h4>
        <h3>Acessar</h3>
        <p>Favor, insira Usuario e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control" value="Alexandre" placeholder="Digite seu e-mail">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="54321" placeholder="Digite sua senha">
                <span class="lnr lnr-eye"></span><!--ainda não esta funcional-->
                <span class="help-block"></span>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>            
    </div>
</body>
</html>