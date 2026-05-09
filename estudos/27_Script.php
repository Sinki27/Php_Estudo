<html>

<body>
    <h1> Esta tabela apresenta a situação dos veículos</h1>
    <table style="HEIGHT:50%;WIDTH:50%;" border=5>
        <tr align="center" bottom="middle">
            <td>
                <table border="1">
                    <tr>
                        <th>Carro</th>
                        <th>Estoque</th>
                        <th>Vendido</th>
                    </tr>

                    <?php

                    $carros = array(
                        array("Gol", 30, 20),
                        array("i30", 40, 30),
                        array("Jeep", 50, 40),
                        array("BMW", 60, 50)
                    );
                    echo "<tr>";
                    echo "<td>" . $carros[0][0] . "</td>";
                    echo "<td align=center>" . $carros[0][1] . "</td>";
                    echo "<td align=center>" . $carros[0][2] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $carros[1][0] . "</td>";
                    echo "<td align=center>" . $carros[1][1] . "</td>";
                    echo "<td align=center>" . $carros[1][2] . "</td>";
                    echo "</tr>";
                    "<tr>";
                    echo "<td>" . $carros[2][0] . "</td>";
                    echo "<td align=center>" . $carros[2][1] . "</td>";
                    echo "<td align=center>" . $carros[2][2] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $carros[3][0] . "</td>";
                    echo "<td align=center>" . $carros[3][1] . "</td>";
                    echo "<td align=center>" . $carros[3][2] . "</td>";
                    echo "</tr>";

                    ?>
                    
                </table>
</body>

</html>