<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimindo</title>
    <style type="text/css">
       /* Bloco de CSS inline */ 
       body{ 
            font: 14px sans-serif; 
            text-align: center;
            display: flex center;
             
        }
        .container
        {
            box-shadow: 1px 1px gray, 1em 0 3em blue;
            
        }       
        
             

    </style>
</head>
<body>
<div class = "container">
<h1>Resultado da Impressão dos Cadastros</h1>
 
<?php

$file_handle = fopen("tmp.txt", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   echo "<br>";
   echo $line;
   echo "<br>";
   
   
}
fclose($file_handle);
?>
</div>
</body>
</html>