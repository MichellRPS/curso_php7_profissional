<!-- 12. serviços externos -->
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        <script src="_js/jquery.js"></script>
        <script>
            // webservice de previsão do tempo: openweathermap
            // precisa de inscrição para utilizar (appid)
            var endereco="http://api.openweathermap.org/data/2.5/weather?q=Sao+Paulo,br&appid=521ad4d9b79eaa696dac27ca3663bd13&units=metric";
            $.ajax({
                type:"GET",
                url:endereco,
                async:false
            }).done(function(data) {
                console.log(data);
            }).fail(function() {
                console.log("erro");
            });
        </script>
    </body>
</html>