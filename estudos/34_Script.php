<html>

<body>
    <h1>Armazenar dados nas variáveis, tirar a média e testar situação do aluno! </h1>
    <h2>Operadores de Comparação == (igual) e cálculo da média</h2>
    <?php
    $notaprova = 4;
    $notatrab = 8;
    echo "A Nota da prova foi: $notaprova <br />";
    echo "A Nota do trabalho foi: $notatrab <br />";

    $media = ($notaprova + $notatrab) / 2;
    echo "A media do aluno é: ";
    echo ($media);
    if ($media >= 6) {
        echo " aluno aprovado ";
    } else {
        echo " aluno reprovado ";
    }

    ?>

</body>

</html>