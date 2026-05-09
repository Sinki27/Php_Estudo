<html>

<body>
    <h1>Echo na tela</h1>
    <?php
    
    $funcionarios = array(
        array("nome" => "Ana Paula", "idade" => 21, "salario" => 1285.20, "ativo" => true),
        array("nome" => "Rodolfo", "idade" => 35, "salario" => 3885.50, "ativo" => false),
        array("nome" => "Pedro Paulo", "idade" => 54, "salario" => 5285.80, "ativo" => true),
    );
    $bonificacao = 10;
    foreach ($funcionarios as $funcionario) {
        if ($funcionario["ativo"]) {
            $funcionario["salario"] += $funcionario["salario"] * ($bonificacao / 100);

            echo "Funcionario: {$funcionario['nome']} - {$funcionario['idade']} - {$funcionario['salario']} </br>";
        } else {
            echo "Funcionario: {$funcionario['nome']} - {$funcionario['idade']} - <b> <i> Inativo </b> </i> </br>";
        }
    }

    ?>
</body>

</html>