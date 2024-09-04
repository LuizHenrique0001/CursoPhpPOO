<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        use Entities\Conta;
        require_once 'Entities/Conta.php';

        $c1 = new Conta();
        $c1->abrirConta(1208, 'pup', 'Luiz Henrique', 1000.00);
        $c1->depositar(120.00);
        $c1->sacar(10.00);

        print_r($c1);
        echo "<br>";
        echo "--------------------------------------------------------------------------------------------------";
        echo "<br>";

        $c2 = new Conta();
        $c2->abrirConta(1210, 'crr', 'Roberto Santos', 1500.00);
        $c2->depositar(120.00);
        $c2->sacar(20.00);
        print_r($c2);
    ?>
</body>
</html>