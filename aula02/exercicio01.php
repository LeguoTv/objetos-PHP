<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'exercicioclass01.php';
            $t1 = new teclado;
            $t1 -> cor = "black";
            $t1 -> uso = "jogar";
            $t1 -> conexao = false;
            //print_r($t1); 
            $t1 -> jogar();
            $t1 -> digitar();
        ?>
    </body>
</html>