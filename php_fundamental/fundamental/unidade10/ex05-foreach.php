<?php
    // foreach (AULA 52)
    $_salada = array ("morango", "limão", "manga", "uva", "laranja", "tangerina", "abacaxi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        // usando for
        for ($_i = 0; $_i < count ($_salada); $_i ++) {
            echo $_salada[$_i] . "<br />";
        }
        // usando foreach
        foreach ($_salada as $_fruta) {
            echo $_fruta . "<br />";
        }
    ?>
</body>
</html>