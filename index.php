<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<form action="index.php" method="GET">
    <label for="nome">Inserisci il tuo nome</label>
    <input type="text" name="nome" id="nome"> <br>

    <label for="mail">Inserisci la tua mail</label>
    <input type="text" name="mail" id="mail"> <br>

    <label for="age">Inserisci la tua età</label>
    <input type="text" name="age" id="age"> <br>


    <button type="submit"> Invia </button>
</form>


<?php

if (isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['age'])) {

    $nome = $_GET['nome'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($nome) > 3 && strpbrk($mail, '@.') !== false && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
}
?>






</body>
</html>