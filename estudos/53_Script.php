<html>

<body>
    <h1>Usando o BREAK para escapar do FOR</h1>

    <?php
    $pararLoop = 9;

    for ($numero = 0; ; $numero++) {
        if ($numero == $pararLoop) {
            break;
        }
        echo $numero . "<br>";
    }
    ?>

</body>

</html>