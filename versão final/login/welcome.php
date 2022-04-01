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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
     
        body{ 
            font: 14px sans-serif; 
            text-align: center;
            display: flex center;
             
        }
            
        .btn-primary{margin-left: auto;
                    margin-right: auto;
                    width: 15em;} 
         .btn-danger{margin-left: auto;
                     margin-right: auto;
                     width: 15em;} 
        .container
        {
            box-shadow: 1px 1px gray, 1em 0 3em blue;
            
        }  
    </style>
</head>
<body>
    <div class="container">
    <div class="page-header">
        <h1><b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Seja Bem Vindo!</h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Carro</a>
        <br><br>
       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>

        <a href="impress.php" class="btn btn-primary">Imprimir Cadastros</a>
        <br><br>

    </p>
    </div>
</body>
</html>