<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valores = $_POST["n"];

    function media($v) {
        $soma = 0;
        $quantidade = 0;

        foreach ($v as $numero) {
            if ($numero !== "") { // ignora campos vazios
                $soma += $numero;
                $quantidade++;
            }
        }

        return $quantidade > 0 ? $soma / $quantidade : 0;
    }

    $resultado = media($valores);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado da Média</h1>

    <p>Média: <?php echo $resultado; ?></p>

</body>
</html>

<?php
} else {
    echo "Acesso inválido.";
}
?>