<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>
    <body>
        <!-- 207. Uso dos métodos done, fail e always -->
        <div id="nome"></div>
        <div id="mensagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).done(function(valor) {
                // essa é uma função anônima
                $('div#nome').html(valor);
            }).fail(function() {
                // essa é outra função anônima
                $('div#nome').html("Falha no carregamento");
            }).always(function() {
                // mais uma função anônima
                $('div#mensagem').html("Mensagem do always");
            })
            // obs.: o always sempre é executado, mesmo se houver falha (fail)
            // obs.: pode colocar o always no exercício anterior também, sem problemas
        </script>
    </body>
</html>