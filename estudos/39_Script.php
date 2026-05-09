<html>

<body>
    <h1>Usando operadores de string para concatenar seu nome</h1>

    <?php
    $a = "Gabriel ";
    $b = $a . "Guilherme"; // agora $b contém "Gabriel Guilherme";
    echo $b;
    echo "<br>";
    $a = "Gabriel ";
    $a .= "Guilherme"; // agora $a contém "Gabriel Guilherme";
    echo $a;

    ?>

</body>

</html>