<?php
    // 10. excluir dados via ajax
    // conexão
    $c = mysqli_connect("localhost:3325","root","","andes");
    if(mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    // consulta tabela transportadoras
    $ct = "SELECT * FROM transportadoras";
    // resultado da consulta
    $rt = mysqli_query($c, $ct);
    if(!$rt) {
        die("Erro ao consultar");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>
    <body>        
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($rt)) {
                ?>
                <ul>
                    <li><?php echo $linha["nometransportadora"] ?></li>
                    <li><?php echo $linha["cidade"] ?></li>
                    <li><a href="" class="excluir" title="<?php echo $linha["transportadoraID"] ?>">Excluir</a></li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>
        <script src="jquery.js"></script>
        <script>
            $('#janela_transportadoras ul li a.excluir').click(function(e) {
                e.preventDefault();
                var id          = $(this).attr("title");
                var elemento    = $(this).parent().parent();
                $.ajax({
                    type:"POST",
                    data:"transportadoraID=" + id,
                    url:"exclusao.php",
                    async:false
                }).done(function(data) {
                    $sucesso = $.parseJSON(data)["sucesso"];
                    if($sucesso) {
                        $(elemento).fadeOut();
                    } else {
                        console.log("Erro ao excluir transportadora");
                    }
                }).fail(function() {
                    console.log("Erro ao excluir transportadora");
                });
            });
        </script>
    </body>
</html>
<?php
    // conexão
    mysqli_close($c);
?>