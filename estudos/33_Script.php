<html>

<body>
    <h1>Resolução Operadores de Comparação == (igual) e != (diferente)  </h1>

    <?php

    $a = 2026;
    $b = '2026';
    echo "Na variável A foi armazenado o ano: $a <br />";
    echo "Na variável B foi armazenado o ano: $b entre aspas <br />";
    if ($a == $b) {
        echo 'Foi feito uma comparação entre as duas variáveis e: $a é igual a $b <br />'; // $a é igual a $b
        echo "O que o PHP interpretou foi que : $a é igual a $b, mesmo que o segundo esteja entre aspas."; // $a é igual a $b
    } elseif ($a != $b) {
        echo '$a é diferente de $b';
    }

    ?>

</body>

</html>