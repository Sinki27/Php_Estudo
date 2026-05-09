<html>

<body>
    <h1>Usando a estrutura de controle WHILE</h1>

    <?php

    $n = 1;
    while ($n <= 10) {
        echo $n++; /* o valor impresso será
                    $n antes do incremento
                    depois faz o incremento (pós-incremento)
                    */
    }

    ?>

</body>

</html>