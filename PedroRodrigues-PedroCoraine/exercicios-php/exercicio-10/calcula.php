<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ano = (int) $_POST["ano"];

    // Verificação de ano bissexto
    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        $mensagem = "O ano $ano é bissexto.";
    } else {
        $mensagem = "O ano $ano não é bissexto.";
    }

} else {
    $mensagem = "Acesso inválido.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado</h1>

    <p><?php echo $mensagem; ?></p>

    

</body>
</html>