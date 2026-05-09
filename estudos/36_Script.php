<html>

<body>
    <h1>Usando os operadores de comparação == != AND</h1>

    <?php

    /**
     * AND
     */
    var_dump(7 == 7 AND 9 > 7); // TRUE, ambas as expressões são verdadeiras
    var_dump(7 == 7 AND 9 < 7); // FALSE, apenas a primeira expressão é verdadeira
    /**
     * OR
     */
    var_dump(7 == 7 OR 9 > 7); // TRUE, ambas as expressões são verdadeiras
    var_dump(7 != 7 OR 9 > 7); // TRUE, a segunda expressão é verdadeira
    var_dump(7 != 7 OR 9 < 7); // FALSE, ambas as expressões são falsas/**
    
    ?>

</body>

</html>