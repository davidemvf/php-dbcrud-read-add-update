<?php

    header('Content-type: application/json');

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'dbbevande';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {

      var_dump('error');
      var_dump($conn);
      die();
    }

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $marca = $_GET['marca'];
    $prezzo = $_GET['prezzo'];
    $scadenza = $_GET['scadenza'];

    $query = "
    UPDATE bevante
    SET nome = " . $nome . ", marca = " . $marca . ", prezzo = " . $prezzo . ", scadenza = " . $scadenza . "
    WHERE id = " . $id . "
    ";



    $res = $conn -> query($query);
    $conn->close();


    echo json_encode($res);

?>
