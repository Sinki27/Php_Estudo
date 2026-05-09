<html>

<body>
    <h1>Testando se a variavel e vazia</h1>
    <?php
    // Testar se variável Nula ou Vazia
    $variável_teste = 13;
    if (empty($variável_teste)) {
        echo 'A variável está vazia';
    } else {
        echo 'O valor da variável é: ' . $variável_teste;
    }
    ?>
</body>

</html>