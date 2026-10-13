<?php
    session_start();

    echo "<h2>Area riservata</h2>";
    echo "<p>Accesso effettuato con successo!</p>";
    echo "<p>Benvenuto nella tua area personale " . $_SESSION['username'] . "</p>";