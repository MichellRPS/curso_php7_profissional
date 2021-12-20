<?php
    // conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    if(mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    // consulta tabela transportadoras
    $ct = "SELECT * FROM transportadoras ";
    if(isset($_GET["codigo"])) {
        $tid = $_GET["codigo"];
        $ct .= "WHERE transportadoraID = {$tid}";
    } else {
        $ct .= "WHERE transportadoraID = 1";
    }
    // resultado da consulta
    $rt = mysqli_query($c,$ct);
    if(!$rt) {
        die("Erro ao consultar");
    }
    // dados da transportadora
    $dt = mysqli_fetch_assoc($rt);
    
    // consulta tabela estados
    $ce = "SELECT * FROM estados";
    // resultado da consulta
    $re = mysqli_query($c,$ce);
    if(!$re) {
       die("Erro ao consultar"); 
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title> 
        <link href="_css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <main>  
            <div id="janela_formulario">
                <form id="formulario_transportadora">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="<?php echo $dt["nometransportadora"] ?>" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" value="<?php echo $dt["endereco"] ?>" name="endereco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo $dt["cidade"] ?>" name="cidade" id="cidade">

                    <label for="estados">Estados</label>
                    <select id="estados" name="estados"> 
                        <?php 
                            $meuestado = $dt["estadoID"];
                            while($linha = mysqli_fetch_assoc($re)) {
                                $estado_principal = $linha["estadoID"];
                                if($meuestado == $estado_principal) {
                        ?>
                            <option value="<?php echo $linha["estadoID"] ?>" selected>
                                <?php echo $linha["nome"] ?>
                            </option>
                        <?php
                                } else {
                        ?>
                            <option value="<?php echo $linha["estadoID"] ?>">
                                <?php echo $linha["nome"] ?>
                            </option>                        
                        <?php 
                                }
                            }
                        ?>
                    </select>
                    
                    <input type="hidden" name="transportadoraID" value="<?php echo $dt["transportadoraID"] ?>">
                    <input type="submit" value="Confirmar alteração">  
                    
                    <div id="mensagem">
                        <p></p>
                    </div>
                </form> 
            </div>
        </main>
        <script src="jquery.js"></script>
        <script>
            $('#formulario_transportadora').submit(function(e) {
                e.preventDefault();
                var formulario  = $(this);
                var retorno     = alterarFormulario(formulario);
            });
            function alterarFormulario(dados) {
                $.ajax({
                    type:"POST",
                    data:dados.serialize(),
                    url:"alterar_transportadora.php",
                    async:false
                }).done(function(data) {
                    $sucesso    = $.parseJSON(data)["sucesso"];
                    $mensagem   = $.parseJSON(data)["mensagem"];
                    if($sucesso) {
                        $('#mensagem p').html($mensagem);
                    } else {
                        $('#mensagem p').html($mensagem);
                    }
                }).fail(function() {
                    $('#mensagem p').html("Erro ao alterar transportadora");
                }).always(function() {
                    $('#mensagem').show();
                });
            }
        </script>
    </body>
</html>