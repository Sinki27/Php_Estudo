<html>

<body>
    <h1>Operadores de Incremento</h1>
    <?php

    $n1 = 2;
    $n2 = 4;
    $n3 = 6;

    $resp1 = ++$n2 - $n1;
    $resp2 = $n3-- + $n1;
    $resp3 = --$n1 + $n3;

    /*Incrementa 1 a $n2 e subtrai $n1 4 + 1 – 2 = 3
    Pós decrementa 1 em $n3 e soma o valor de $n1 6 + 2 = 8 / = 6 - 1
    Pré decrementa 1 em n1 e soma o valor de $n3 (2 - 1) + 5 = 6 / = 1 + 5 = 6
    1
    o
    2
    o
    $n1 🡺 2 $n2 🡺 4 $n3 🡺 6
    $n2 🡺 5 $n3 🡺 5 $n1 🡺 1
    1 5 5
    3 8 */

    echo "num1 = $n1<br> num2 = $n2<br> num3 = $n3<b><br>";
    echo "resposta1 = $resp1<br> resposta2 = $resp2<br> resposta3 = $resp3<br>";


    ?>




</body>

</html>