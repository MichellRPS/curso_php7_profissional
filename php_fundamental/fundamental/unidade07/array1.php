<?php
    // CRIANDO UM ARRAY (AULA 33)
    $_darksiders = array("Darksiders Warmastered Edition", "Darksiders II Deathinitive Edition", "Darksiders III Deluxe Edition", "Darksiders Genesis");
    $_jogos = array("Darksiders", 4, "Resident Evil", 11, "Gears of War", 5);
    // é possível ter mais de um tipo de dado em um único array
    $_jogos[] = "The Witcher";
    $_jogos[] = "4";
    // é possível adicionar novos elementos sem especificar a posição, pois quando há colchetes em branco, o php entende que o elemento deve ser adicionado na última posição
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Array Darksiders: <br />";
            echo $_darksiders[0] . "<br />";
            echo $_darksiders[1] . "<br />";
            echo $_darksiders[2] . "<br />";
            echo $_darksiders[3] . "<br />";
            echo "Quantas posições tem o array darksiders? " . count($_darksiders) . "<br />";
            echo "<br />Array Jogos: <br />";
            echo $_jogos[0] . "<br />";
            echo $_jogos[1] . "<br />";
            echo $_jogos[2] . "<br />";
            echo $_jogos[3] . "<br />";
            echo $_jogos[4] . "<br />";
            echo $_jogos[5] . "<br />";
            echo "Quantas posições tem o array jogos? " . count($_jogos) . "<br />";
        ?>

        <?php
            // o método print_r imprime informações sobre as variáveis, incluindo vetores
            print_r($_darksiders);
            print_r($_jogos);
            // não responde à tag <br />
        ?>

        <!-- a tag <pre> define texto pré-formatado -->
        <pre>
            <?php
                print_r($_darksiders);
                print_r($_jogos);
            ?>
        </pre>
    </body>
</html>