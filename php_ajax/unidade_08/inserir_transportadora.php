  <?php
    // 222. Adicionando a função $.ajax
    $c = mysqli_connect("localhost:3325","root","","andes");
    if (mysqli_connect_errno()) {
        die("Erro ao conectar: " . mysqli_connect_errno());
    }
    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        // consulta inserção
        $ci    = "INSERT INTO transportadoras";
        $ci    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $ci    .= "VALUES ";
        $ci    .= "('$nome','$endereco','$cidade', $estado)";
        // resultado
        $ri = mysqli_query($c, $ci);
        if($ri) {
            echo "OK";
        } else {
            echo "Erro";
        }
    }
    // libera resultado da consulta
    mysqli_free_result($ri);
    // fecha conexão
    mysqli_close($c);
?>