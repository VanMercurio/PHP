<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de strings</title>
</head>

<body>
    <h1>VAMOS INTERPRETAR AS STRINGS</h1>
    <p>Aspas duplas e aspas simples</p>

    <?php
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom ! \n";
    // usar o \ permite que ele leia as aspas duplas dentro de aspas duplas e se chama sequencia de escape

    echo "$nom $snom ganha muito \$ !"; // aqui ele vai mostrar o sinal de $ na frase
    // \t = tabulação > ele vai dar tab no meio da frase
    // \n vai pular uma linha
    // heredoc é usada para imprimir uma grande frase. EX:

    $canal = "Curso em video";
    $ano = date('Y');
    echo <<< TESTE
        \n Eu estou estudando $canal 
            No ano de $ano!

    TESTE;

    ?>
</body>

</html>