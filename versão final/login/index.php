<?php
 
//iniciando a sessão caso o método seja post
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    //validando o usuario e senha
    if($_POST['username'] == 'Ragnar' and $_POST['password'] == '123mudar'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Ragnar';
         header("location: welcome.php");

    } 
    //caso o login e senha estejam diferente apresentar
    else 
    {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
     /* Bloco de CSS inline */   
    
        body{ 
            font: 14px sans-serif; 
            text-align: center;
            
             
        }
        .btn-primary
        {
              margin-left: auto;
              margin-right: auto;
              width: 22em;
        }        
        .msg{
              margin-left: auto;
              margin-right: auto;
              width: 20em;
              
        }
        h2{
              text-align: center;
              width: 9em
          }
          .wrapper
        {
            box-shadow: 1px 1px gray, 1em 0 3em blue;
            
        }  
        .form-control
        {
            margin-left: auto;
              margin-right: auto;
              width: 22em; 
        }
  
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="msg">
        <h2>Entrar no Sistema</h2>
    </br>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="username" class="form-control" value="Ragnar">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="123mudar">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
            <div class="forget">
            <a href="url">Esqueceu a Senha?</a>
            </div>
        </form>
    </div>    
</body>
</html>