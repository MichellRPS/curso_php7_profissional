<?php
    // Mostrar os dados dentro de um elemento (aula 129)
    // Mostrar dados do array associativo da consulta
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
        <ul> <!-- a tag <ul> indica uma lista não ordenada -->
        <!-- a tag <ol>, ao contrário, indica uma lista ordenada (números) -->
        <?php
            // Fazer listagem de dados (aula 128)
            // códigos PHP podem ser inseridos dentro de tags HTML, porém o contrário não é verdadeiro
            // tags HTML não podem ser inseridas em códigos PHP (ocorre erro)
            while($registro = mysqli_fetch_assoc($produtos)) {
        ?>
                <li><?php echo $registro['nomeproduto']; ?></li>
                <!-- a tag <li> indica um item ou elemento de uma lista -->
        <?php
            }
            // Liberar espaço da consulta (aula 130)
            mysqli_free_result($produtos);
            // Após utilizar o resultado de uma consulta ao banco, deve-se liberar a memória do servidor utilizada para guardar esse resultado, pois isso melhora a performance do site
        ?>
        </ul>
    </body>
</html>

<?php
    // deve-se sempre fechar uma conexão aberta
    mysqli_close($conecta);
?>