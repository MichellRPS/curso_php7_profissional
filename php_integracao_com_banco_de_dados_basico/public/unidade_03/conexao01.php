<?php
    // Como criar uma conexão com MySQL (aula 126)
    // passo 1 - criar conexão com MySQL
    $servidor   = "localhost:3325";
    // se não colocar :3325, que é a porta de acesso, ocorrerá o erro 1045
    $usuario    = "root";
    $senha      = "";
    $banco      = "andes";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);
    // passo 2 - testar conexão
    if(mysqli_connect_errno()) {
        die("Conexão falhou: " . mysqli_connect_errno());
        // die é equivalent a exit
    }
    // Criar uma consulta a uma tabela (aula 127)
    // passo 3 - criar uma consulta
    $consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega";
    // não esqueça do espaço em branco ao final da última coluna
    // ou antes da próxima palavra reservada
    $consulta_produtos .= " FROM produtos";
    // os símbolos .= indicam que o conteúdo após o sinal de igual será concatenado ao que já existe
    $consulta_produtos .= " WHERE tempoentrega = 5";
    $produtos = mysqli_query($conecta, $consulta_produtos);
    if(! $produtos) {
        die("Falha na consulta ao banco de dados");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <?php
            // Fazer listagem de dados (aula 128)
            while($registro = mysqli_fetch_assoc($produtos)) {
                // além da função mysqli_fetch_assoc(), há duas outras:
                // mysqli_fetch_row()
                // mysqli_fetch_array()
                // as três fazem a mesma coisa, porém o resultado é organizado de forma diferente no array
                print_r($registro);
                // lembrando: a função print_r não deve ser usada para projetos reais, apenas testes
                echo "<br />";
            }
        ?>
    </body>
</html>

<?php
    // deve-se sempre fechar uma conexão aberta
    mysqli_close($conecta);
?>