<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;500&display=swap" rel="stylesheet">
    <style type="text/css">

        body{ 
            font: 15px sans-serif ; font-family: 'Roboto Slab', serif; background-color: #b5c5ca;}

        .wrapper{
            width: 400px; padding: 20px; }
            
        .form-group input{
            box-shadow: 10px 5px #999999;}
        .wrapper { 
            width: 350px; padding: 20px; }
        .wrapper h1{
            color:#227087; border-radius: white;
        }
        .wrapper h4{color: red; padding: 0px 30px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
    <h1><b>Fatec</b></h1>
        <h4><b>Araras</b></h4>
        <h2><b>Cadastro</b></h2>
        <p>Cadastro de aluno</p>
        <form action="processamento.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="Nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Sobrenome</label>
                <input type="text" name="Sobrenome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>RA</label>
                <input type="text" name="RA" class="form-control" value="">
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">       
            </div>
            
        </form>
    </div>    
</body>
</html>