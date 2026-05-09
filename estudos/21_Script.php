<html>

<body>
    <h1>Usando o foreach para varrer um Array</h1>
    <?php

    $funcionario = array(
        array(1, "João Paulo", "RH", 12000),
        array(2, "Ana Beatriz", "TI", 18000),
        array(3, "Pedro Paulo", "PCP", 10000),
        array(4, "Maria Rosa", "RH", 8000),
        array(5, "Carlos Silva", "COMPRAS", 16000),
        array(6, "Rosana Alves", "DIRETORIA", 22000),
        array(7, "João Mattos", "FINANCEIRO", 18000)
    );
    foreach ($funcionario as $chave => $valor) {
        echo "Funcionário {$valor[0]}: &nbsp {$valor[1]} &nbsp <b>{$valor[3]} </b>";
        echo "<br>";
    }

    ?>

    <h1>Melhorando o Srcipt 21, com a base do 28</h1>
    <table style="HEIGHT:50%;WIDTH:50%;" border=5>
        <tr align="center" bottom="middle">
            <td>
                <table border="1">
                    <tr>
                        <th>Nome</th>
                        <th>Departamento</th>
                        <th>Salario</th>
                    </tr>
                    <?php

                    $funcionario = array(
                        array(1, "João Paulo", "RH", 12000),
                        array(2, "Ana Beatriz", "TI", 18000),
                        array(3, "Pedro Paulo", "PCP", 10000),
                        array(4, "Maria Rosa", "RH", 8000),
                        array(5, "Carlos Silva", "COMPRAS", 16000),
                        array(6, "Rosana Alves", "DIRETORIA", 22000),
                        array(7, "João Mattos", "FINANCEIRO", 18000)
                    );

                    echo "<tr>";
                    echo "<td>" . $funcionario[0][1] . "</td>";
                    echo "<td align=center>" . $funcionario[0][2] . "</td>";
                    echo "<td align=center>" . $funcionario[0][3] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $funcionario[1][1] . "</td>";
                    echo "<td align=center>" . $funcionario[1][2] . "</td>";
                    echo "<td align=center>" . $funcionario[1][3] . "</td>";
                    echo "</tr>";
                    "<tr>";
                    echo "<td>" . $funcionario[2][1] . "</td>";
                    echo "<td align=center>" . $funcionario[2][2] . "</td>";
                    echo "<td align=center>" . $funcionario[2][3] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $funcionario[3][1] . "</td>";
                    echo "<td align=center>" . $funcionario[3][2] . "</td>";
                    echo "<td align=center>" . $funcionario[3][3] . "</td>";
                    echo "</tr>";

                    ?>

                </table>
</body>

</html>