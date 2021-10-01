<?php
    // CONVERTER CELSIUS EM FAHRENHEIT (AULA 59)
    function toFahrenheit ($_c) {
        return ($_c * 1.8) + 32;
    }
    function toKelvin ($_c) {
        return $_c + 273.15;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        echo "Temperatura em °F: " . toFahrenheit (0) . "°F<br />";
        echo "Temperatura em K: " . toKelvin (0) . " K";
    ?>
</body>
</html>