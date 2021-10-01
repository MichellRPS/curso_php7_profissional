<?php
    // foreach POR VALORES (AULA 53)
    $_agenda = array (
        "Nome" => "Michell",
        "Telefone" => "(34) 9 9969-9014",
        "Salário" => "R$ 400,00"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        foreach ($_agenda as $_contato => $_dado) {
            echo $_contato . ": " . $_dado . "<br />";
        }
    ?>
</body>
</html>