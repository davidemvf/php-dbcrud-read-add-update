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

    $query = '
      SELECT id, nome, marca, prezzo, scadenza
      FROM bevante
      ';
    $res = $conn -> query($query);

    $bevande = [];

    if ($res && $res -> num_rows > 0) {


      while($row = $res -> fetch_assoc()) {


          $bevande[] = $row;
      }
    }

    $conn->close();
    echo json_encode($bevande);

?>
