<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>

<body>
    <?php
    //variavel nome recebe Vanessa
    $nome = "Vanessa";
    //variavel sobrenome recebe Mercurio
    $sobrenome = "Mercurio";
    //imprimir Muito prazer variavel nome e variavel sobrenome
    echo "Muito prazer $nome $sobrenome!";
    //CONST É UMA CONSTANTE, QUE NÃO MUDA
    const PAIS = "Brasil";
    //imprimir "voce mora no" . é para concatenar a const
    echo "Voce mora no " . PAIS;
    //variavel altera qdo usamos miuscula ou minuscula
    $Nome = "Ricardo";
    echo " $Nome é casado com $nome";
    ?>

</body>

</html>