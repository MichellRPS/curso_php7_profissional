<?php
    // 221. Identificar os dados do formulário
    // conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    if (mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    // consulta tabela estados
    $ce = "SELECT estadoID, nome FROM estados";
    // resultado
    $re = mysqli_query($c, $ce);
    if(!$re) {
        die("Erro ao consultar o banco de dados");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <!-- script -->
        <script src="jquery.js"></script>
    </head>
    <body>
        <main>
            <div id="janela_formulario">
                <form id="formulario_transportadora">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" id="nometransportadora">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">
                    <select name="estados">
                        <?php while($linha = mysqli_fetch_assoc($re)) { ?>
                            <option value="<?php echo $linha["estadoID"]; ?>">
                                <?php echo $linha["nome"]; ?>
                            </option>
                        <?php
                            }
                            mysqli_free_result($re);
                            mysqli_close($c);
                        ?>
                    </select>
                    <input type="submit" value="Confirmar">
                    <div id="mensagem">
                        <p></p>
                    </div>
                </form>
            </div>
        </main>
        <script>
            $('#formulario_transportadora').submit(function(e) {
                // impede a ação padrão associada ao evento (formulário)
                // se remover, então dados do formulário aparecerão na URL após envio
                e.preventDefault();
                var formulario = $(this);
                // 222. Adicionando a função $.ajax
                var retorno = inserir(formulario)
            });
            function inserir(dados) {
                // função do jQuery
                // semelhante ao exercício01 da unidade_02
                $.ajax({
                    type:"POST",
                    data:dados.serialize(),
                    url:"inserir_transportadora.php",
                    async:false
                    // async:false significa que a instrução invocada precisa ser completada antes da próxima ser executada
                }).then(sucesso,falha);
                function sucesso(data) {
                    console.log(data);
                }
                function falha() {
                    console.log("Erro");
                }
            }
        </script>
    </body>
</html>