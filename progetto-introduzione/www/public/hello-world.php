<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h1>
        <?php
            // funzione echo integrata invia messaggi attraverso HTML
            // $_ indica funzione speciale
            // $_GET[variabile] = prende attraverso HTTP GET Request un valore passato nella query
            echo "Hello " . $_GET['nome'] . "!";
        ?>
    </h1>
    <p>Questo è il mio primo programma.</p>
</body>
</html>