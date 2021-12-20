<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>
    <body>
        <!-- 209. Carregar um arquivo XML -->
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            // obs.: o segundo parâmetro não é obrigatório
            $.ajax({
                url:'_xml/produtos.xml'
            }).then(sucesso, falha);
            // poderia ser o done ao invés do then
            function sucesso(arquivo) {
                // mostra no console o nome de todos os produtos
                // console.log($(arquivo).find('produto').find('nomeproduto').text());
                // mostra na tela o nome e o preço de todos os produtos
                // inicia a lista não ordenada
                var elemento = "<ul>";
                // laço de repetição para ler o arquivo XML
                $(arquivo).find('produto').each(function() {
                    // função anônima
                    // atribui o nome e o preço de um produto às variáveis: nome e preço
                    // $(this) é o mesmo que $(arquivo)?
                    // R.: Não. Na verdade, é como se fosse um laço foreach do Java, então o this representa o elemento da iteração atual do laço, uma linha do arquivo.
                    var nome    = $(this).find('nomeproduto').text();
                    var preco   = $(this).find('precounitario').text();
                    // define um elemento da lista
                    elemento += "<li>" + nome + " - R$ " + preco + "</li>";
                });
                elemento += "</ul>"
                // mostra a lista
                $('div#listagem').html(elemento);
            }
            function falha() {
                $('div#listagem').html("Falha no carregamento");
            }
        </script>
    </body>
</html>