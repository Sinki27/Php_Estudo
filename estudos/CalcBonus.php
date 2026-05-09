<html>

<head>
    <title>64º_Script - Resultado Calc Bonus</title>
</head>

<body>

    <?php
    $nMeses = $_POST["txtMeses"];
    $nSalario = $_POST["txtSalario"];
    $nBonus = $_POST["txtBonus"];
    $calc = 0;

    echo"<br><strong>Mes</strong> &nbsp;&nbsp <strong>Sal.Atual</strong> &nbsp;&nbsp <strong>Bonus</strong> &nbsp;&nbsp <strong>Sal.+bonus</strong>";
    for($cont = 1;$cont<=$nMeses;$cont++){
        $calc = $nSalario + $nBonus;
            echo "<br>&nbsp $cont &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $nSalario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nBonus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $calc";
        $nSalario = $calc;
    }
    ?>

</body>

</html>