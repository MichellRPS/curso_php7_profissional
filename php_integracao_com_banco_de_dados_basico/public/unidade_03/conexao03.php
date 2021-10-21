<?php
    // Criar arquivo de conexão (aula 133)
    require_once("../../conexao/conexao.php");
    // o símbolo ../ no caminho de arquivo acima significa que deve retroceder uma pasta (ir para a pasta anterior)
    // nesse caso há dois desses símbolos, ou seja, é preciso voltar duas pastas (unidade_03 e public) para ir à pasta conexao e depois ao arquivo conexao.php
    $consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega";
    $consulta_produtos .= " FROM produtos";
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
        <ul>
        <?php
            while($registro = mysqli_fetch_assoc($produtos)) {
        ?>
                <li><?php echo $registro['nomeproduto']; ?></li>
        <?php
            }
            mysqli_free_result($produtos);
        ?>
        </ul>
    </body>
</html>

<?php
    mysqli_close($conecta);
?>