<?php
    // while (AULA 48)
    $_count = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        while ($_count < 4) {
            $_draw = rand (1, 60);
            echo $_draw . " ";
            $_count += 1;
        }
    ?>
</body>
</html>