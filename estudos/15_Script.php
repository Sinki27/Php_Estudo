<html>

<body>
    <h1>Retornando os tipos de varaiveis</h1>
    <?php
    $nome = 'João Paulo';
    $idade = 17;
    $nota = 8.5;
    $status = TRUE;
    if (is_string($nome)) {
        echo "a variável é string\n";
    } else {
        echo "a variável não é string\n";
    }

    echo ('<br />');
    var_dump(is_int($idade));
    echo ('<br />');
    var_dump(is_float($nota));
    echo ('<br />');
    var_dump(is_int($status));
    ?>
</body>

</html>