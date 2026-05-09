<html>

<head>
    <title>66º_Script - Resultado Censura do Show</title>
</head>

<body>

    <?php
    $nomeP = $_POST["txtNome"];
    $idadeP = $_POST["txtIdade"];
    if($idadeP >=1 And $idadeP <= 12) {
        echo"<br><font color ='red'>O usuario $nomeP nao tem acesso permitido pela idade: $idadeP anos</font>";
    } elseif( ($idadeP >= 13) And ($idadeP <=17) ) {
        echo "<br><font color ='blue'>O usuario $nomeP tera acesso permitido com acompanhante ou autorizacao para idade: $idadeP anos</font>";
    } else {
        echo "<br><font color ='green'>O usuario $nomeP tem acesso permitido pela idade: $idadeP anos</font>";
    }
    ?>

</body>

</html>