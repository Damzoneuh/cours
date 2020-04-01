<?php
  if (isset($_POST['text'])){
      $text = $_POST['text'];
      $array = [[
          'text' => $text
        ],
        [
            'text' => 'autre chose' //Tableau multidimensionnel
        ]
      ];
    $mysqli = new mysqli();

    if ($error = $mysqli->connect_error){
        die( $error);
    }
    if (!$error){
        // connection + requête insertion
        $mysqli->connect('localhost', 'root', '', 'test', '3306');
        $query = "INSERT INTO test VALUES ( NULL, '.$text.')";
        $result = $mysqli->query($query);

        $result = $mysqli->query('SELECT * from test');
        $mysqli->close();
        if ($mysqli->error){
            die($mysqli->error);
        }

        if ($result){
            $row = $result->fetch_array();
            foreach ($row as $key => $value){
               $row[$row[$key]] = $value;
            }
        }
    }
  }

  // new DateTime() ceci est un objet date;
?>

<body>
    <form action="index.php" method="post">
        <input type="text" id="text" name="text" required placeholder="écrivez votre text">
        <input type="password" name="password" required placeholder="taper votre mot de passe">
        <button type="submit" name="submit">Envoyer</button>
    </form>

