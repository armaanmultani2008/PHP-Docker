<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Accettazione Form Corso Lingua</title>
</head>
<body>
    <?php
        $messaggio_errore = "";
        function correggi_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if(empty($_POST["cognome"]))
            $messaggio_errore .= "Il Cognome è obbligatorio\n";
        else $cognome = correggi_input($_POST["cognome"]);


        if(empty($_POST["nome"]))
            $messaggio_errore .= "Il Nome è obbligatorio\n";
        else $nome = correggi_input($_POST["nome"]);

        $email = correggi_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email))
            $messaggio_errore .= "Email non valida o non inserita\n";

        if(empty($_POST["corso"]))
            $messaggio_errore .= "Scelta del Corso obbligatoria\n";
        else $corso = correggi_input($_POST["corso"]);

        if(empty($_POST["livello"]))
            $messaggio_errore .= "Scelta del Corso obbligatoria\n";
        else $livello = correggi_input($_POST["livello"]);

        if(empty($_POST["orario"]))
            $messaggio_errore .= "Scelta dell'Orario obbligatoria\n";
        else $orario = correggi_input($_POST["orario"]);

        if(empty($_POST["richieste"]))
            $richieste = "nessuna";
        else $richieste = $_POST["richieste"];

        if(empty($messaggio_errore)){
            echo
                    "Gentile $cognome $nome\n
                    Lei ha richiesto l'iscrizione al corso $corso livello $livello con orari:\n
                    $orario\n
                    Altre richieste:\n
                    $richieste\n
                    Stiamo verificando tutti i dati, le invieremo la risposta all'email $email";
        }
        else{
            echo "<h2>Errore!</h2>";
            echo $messaggio_errore;
        }
    ?>
</body>
</html>
