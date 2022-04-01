
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
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style type="text/css">
    /* Bloco de CSS inline */ 
        body{ 
            font: 14px sans-serif; 
            text-align: center;
            display: flex center;
             
        }
        .form-control
        {margin-left: auto;
         margin-right: auto;
         width: 15em;
        } 
        .btn-primary
        {margin-left: auto;
         margin-right: auto;
         width: 15em;
        }    
        .wrapper
        {
            box-shadow: 1px 1px gray, 1em 0 3em blue;
            
        }       
        
             

    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro de Carro</h2>
         <form action="grava.php" method="post">
            <div class="form-group">
                <label>Montadora do Veículo</label>
                <input type="text" name="montadora" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Placa do Veículo</label>
                <input type="text" name="placa" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Modelo do Veículo</label>
                <input type="text" name="modelo" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Gravar">
            </div>          
                <a href="impress.php" class="btn btn-primary">Imprimir Cadastros</a>
                <br><br></div>


        </form>
    </div>    
</body>
</html>