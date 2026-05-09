<html>

<body>
    <h1>Resolução do desafio. Apresentar números ímpares</h1>

    <?php
    for ($num = 0; $num <= 50; $num++) {
        if ($num % 2 == 0) //se num for par (divisível por 2)
            continue; //ignora o resto do for e vai para o próximo número
        echo ($num . " ");
    }
    ?>

</body>

</html>