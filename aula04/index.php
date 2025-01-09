<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 1.0);
             print_r($c1);
             print_r($c2);

            //$c1->setModelo("BIC"); // consegue modificar metodos privados
            //$c1->modelo = "BIC";
            //$c1->setPonta(0.5);
        //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        ?>
        </pre>
    </body>
</html>