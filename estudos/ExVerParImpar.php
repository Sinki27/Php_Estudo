<html>

<head>
    <title>62º_Script</title>
</head>

<body>
    <h1>No digitado e par, Msg na cor azul, negrito e italico<br>
        No digitado e impar, Msg na cor Vermelha, negrito e italico</h1>
        <?php
        //Inicializando variaveis
        $var_recebida = 0;
        //REALIZA A LEITURA DO ELEMENTO txtNum ENVIADO NO POST DA PAGINA
        $var_recebida = $_POST["txtNum"];
        //OPERADOR % DEVOLVE O RESTO DA DIVISAO
        //SE FOR IGUAL A ZERO E PAR
        if ($var_recebida % 2 == 0) {
            echo"<h1><br><font color='blue'> <b><i> O nº $var_recebida e par</font></b></i></h1>";
        } else {
            echo"<h1><br><font color='red'> <b><i> O nº $var_recebida e impar</font></b></i></h1>";
        }
        ?>
</body>

</html>