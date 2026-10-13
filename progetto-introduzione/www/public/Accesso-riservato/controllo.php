<?php
    $errore = false;
    function correggi_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = correggi_input($_POST["username"]);
    $password = correggi_input($_POST["password"]);

    if (strlen($password) < 8) {
        $errore = true;
        echo "<h2>Errore!</h2>";
        echo "<p>La password non rispetta i requisiti richiesti</p>";
        echo "<p>La Password deve contenere almeno 8 caratteri</p>";
    }

    $maiuscola_trovata = false;
    $numero_trovato = false;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] >= 'A' && $password[$i] <= 'Z')
            $maiuscola_trovata = true;
        if (is_numeric($password[$i]))
            $numero_trovato = true;
    }

    if (!$maiuscola_trovata) {
        if (!$errore) {
            $errore = true;
            echo "<h2>Errore!</h2>";
            echo "<p>La password non rispetta i requisiti richiesti</p>";
            echo "<p>La Password deve contenere almeno una Maiuscola.</p>";
        }
        else
            echo "<p>La Password deve contenere almeno una Maiuscola.</p>";
    }

    if (!$numero_trovato) {
        if (!$errore) {
            $errore = true;
            echo "<h2>Errore!</h2>";
            echo "<p>La password non rispetta i requisiti richiesti</p>";
            echo "<p>La Password deve contenere almeno un Numero.</p>";
        }
        else
            echo "<p>La Password deve contenere almeno un Numero.</p>";
    }

    if(!$errore) {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: area-riservata.php");
        exit;
    }
    echo "<a href='login.php'>Torna indietro</a>";
?>