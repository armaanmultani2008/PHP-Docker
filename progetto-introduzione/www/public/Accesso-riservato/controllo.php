<?php
    $messaggio_errore = "";
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
        $messaggio_errore .= "La password non rispetta i requisiti richiesti\n";
        $messaggio_errore .= "La Password deve contenere almeno 8 caratteri\n";
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
        if (strlen($messaggio_errore) == 0)
            $messaggio_errore .= "La password non rispetta i requisiti richiesti\n";
        $messaggio_errore .= "La Password deve contenere almeno una lettera maiuscola\n";
    }

    if (!$numero_trovato) {
        if (strlen($messaggio_errore) == 0)
            $messaggio_errore .= "La password non rispetta i requisiti richiesti\n";
        $messaggio_errore .= "La Password deve contenere almeno una lettera maiuscola\n";
    }


    if (empty($messaggio_errore)) {
        echo "<h2>Area riservata</h2>";
        echo "<p>Accesso effettuato con successo!</p>";
        echo "<p>Benvenuto nella tua area personale " . $username . "</p>";
    } else {
        echo "<h2>Errore!</h2>";
        echo $messaggio_errore;
    }
    echo "<a href='login.php'>Torna indietro</a>";
?>