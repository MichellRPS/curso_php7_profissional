<?php
    // for DECRESCENTE (AULA 51)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        for ($_contador = 6 ; $_contador > 0; $_contador --) {
            $_sorteio = rand(1,60);
            echo $_sorteio . " ";
        }
    ?>
</body>
</html>