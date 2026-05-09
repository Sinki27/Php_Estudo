<html>

<body>
    <h1>Usando SWITCH ao invés de IF</h1>

    <?php

    $fruta = "abacate";
    switch ($fruta) {
        case "maçã":
            echo "A fruta é maça";
            break;
        case "abacate":
            echo "A fruta é abacate";
            break;
        case "limão":
            echo "A fruta é limão";
            break;
    }

    ?>

</body>

</html>