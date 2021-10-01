<?php
    // do while (AULA 49)
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
        do {
            $_draw = rand (1, 60);
            echo $_draw . " ";
            $_count += 1;
        } while ($_count < 0);
    ?>
</body>
</html>