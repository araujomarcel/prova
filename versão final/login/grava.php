<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravando</title>
</head>
<body>
<?php

$condicao = 1;

if ( (isset($_POST['montadora'])) and (isset($_POST['placa'])) and (isset($_POST['modelo'])))
{
  $montadora = $_POST['montadora'];
  $placa  = $_POST['placa'];
  $modelo = $_POST['modelo'];
}

if ($condicao == 1)
{
    echo '<br><br>Veículo Cadastrado Com Sucesso'.'<br>';

    $arq = "tmp.txt";

    if(!file_exists($arq))
        $handle = fopen($arq, "w");
    else 
        $handle = fopen($arq, "a");

    fwrite($handle, "montadora:".$montadora."\n");
    fwrite($handle, "placa:".$placa."\n");
    fwrite($handle, "modelo:".$modelo."\n");
    fflush($handle);
    fclose($handle);
}

?>
<p>
    <a href="welcome.php" class="btn btn-danger">Voltar</a>
</p>

</body>
</html>