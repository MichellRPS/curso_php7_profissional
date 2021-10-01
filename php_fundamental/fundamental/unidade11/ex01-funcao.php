<?php
    // CRIAR FUNÇÕES (AULAS 57 e 58)
    function calculateDailyIncome ($_salary, $_days) {
        return number_format ($_salary / $_days, 2);
    }
    // a função number_format possibilita definir o número de casas decimais que um número deverá exibir
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        echo "Michell: R$ " . calculateDailyIncome (400, 30) . "<br />";
        echo "Helizandra: R$ " . calculateDailyIncome (3000, 30);
    ?>
</body>
</html>