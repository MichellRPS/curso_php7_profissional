<?php
    // for (AULA 50)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        for ($_count = 0; $_count < 6; $_count ++) {
            $_draw = rand (1, 60);
            echo $_draw . " ";
        }
    ?>
</body>
</html>