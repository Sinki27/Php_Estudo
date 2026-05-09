<html>

<body>
    <h1>Usando o CONTINUE para escapar do FOR</h1>

    <?php
    for ($num = 0; $num < 11; $num++) {
        if ($num % 2 == 0) {
            continue;
        }
        echo $num . "<br>";
    }
    ?>

</body>

</html>