<html>

<body>
    <h1>Recapitulando o foreach</h1>
    <?php
    //Array de elemento de String
    $myArray = array(
        'item_1',
        'item_2',
        'item_3',
        'item_4',
        'item_5',
        'item_6',
    );
    //Iterando item por item do Array $myArray com FOREACH
    foreach ($myArray as $keyItem => $itemValue) {
        echo 'Item índice: ' . $keyItem . ', Valor: ' . $itemValue;
        echo '<br>';
    }
    ?>
</body>

</html>