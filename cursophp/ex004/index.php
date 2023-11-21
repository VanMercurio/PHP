<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos Primitivos</title>
</head>

<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal 0b = binario 0 = octal
    //Exemplo : $num = 010 1. neste caso o valor a serimpresso será 8 pq 010 é octal e 10 = 8 em octal

    $v = 300;
    var_dump($v); //o var_dump mostra os detalhes da variavel, neste caso ele mostra que ela é um int

    $numm = (int)"950";
    var_dump($numm);
    // neste caso vai mostrar que é string, mas eu posso forçar a mostrar que é inteiro fazendo uma coerção apontando antes do num o int



    ?>
</body>

</html>