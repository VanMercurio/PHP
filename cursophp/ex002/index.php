<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <h1>Exemplos de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo"); //para definir data e hora local
    echo "Hoje é dia " . date("d/M/Y"); // ponto para concatenar
    echo " e a hora é " . date("G:i:s");

    ?>

</body>

</html>