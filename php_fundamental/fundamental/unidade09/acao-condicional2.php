<?php
    // SWITCH CASE (AULA 40)
    $_dia = "monday";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            switch ($_dia) {
                case "monday": {
                    echo "monday left me broken...";
                    break;
                }
                case "tuesday": {
                    echo "tuesday I was through with hoping...";
                    break;
                }
                case "wednesday": {
                    echo "wednesday my empty arms were open...";
                    break;
                }
                case "thursday": {
                    echo "thursday waiting for love, waiting for love to come around...";
                    break;
                }
                case "friday": {
                    echo "thank the stars it's friday...";
                    break;
                }
                case "saturday": {
                    echo "I'm burning like a fire gone wild on saturday...";
                    break;
                }
                case "sunday": {
                    echo "guess I won't be coming to church on sunday, I'll be waiting for love, waiting for love to come around.";
                    break;
                }
                default: {
                    echo "o dia não é.";
                    break;
                }
                // no último case (ou em default) não é preciso colocar break, porém não tem problema colocar, também
                // e quanto aos colchetes?
            }
        ?>
    </body>
</html>