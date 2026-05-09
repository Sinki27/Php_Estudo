<html>

<body>
    <h1>Exemplo do foreach</h1>
    <?php
    
    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    foreach ($lista as $chave => $valor) {
        echo "$chave: $valor";
        echo "</br>";
    }

    ?>
</body>

</html>