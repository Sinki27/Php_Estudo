<html>

<body>
    <h1>Resolução do desafio. Apresentar números pares</h1>

    <?php
    for ($num = 2; $num <= 100; $num += 2) { //Nos pares de 2 a 100
        echo ($num . " ");
        if ($num % 10 == 0) //se num for divisível por 10
            break; //saia do loop
    }

    ?>

</body>

</html>